<?php
/**
 * Factory class for SOAP clients for the AdWords API.
 *
 * PHP version 5
 *
 * Copyright {copyright}
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    AdWords
 * @category   WebServices
 * @copyright  {copyright}
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Adam Rogal <api.arogal@gmail.com>
 */

namespace AdWords;

/**
 * Factory class for SOAP clients for the AdWords API.
 *
 * @package AdWords
 * @subpackage Lib
 */
class SoapClientFactory
{
    private $user;
    private $version = 'v201109';
    private $server;
    private $defaultServer = 'https://adwords.google.com';
    private $headerOverrides;
    private $locationMask = '%s/api/adwords/%s/v201109/%sService';
    private $classNameMask = '\\AdWords\\%s\\%s\\%sService';
    private $serviceNsMap = array(
        'AdExtensionOverride' => 'cm',
        'AdGroupAd'           => 'cm',
        'AdGroupCriterion'    => 'cm',
        'AdGroup'             => 'cm',
        'AdParam'             => 'cm',
        'Alert'               => 'mcm',
        'BulkMutateJob'       => 'job',
        'BulkOpportunity'     => 'o',
        'CampaignAdExtension' => 'cm',
        'CampaignCriterion'   => 'cm',
        'Campaign'            => 'cm',
        'CampaignTarget'      => 'cm',
        'ConstantData'        => 'cm',
        'ConversionTracker'   => 'cm',
        'CreateAccount'       => 'mcm',
        'CustomerSync'        => 'ch',
        'Data'                => 'cm',
        'Experiment'          => 'cm',
        'GeoLocation'         => 'cm',
        'Info'                => 'info',
        'LocationCriterion'   => 'cm',
        'Media'               => 'cm',
        'MutateJob'           => 'cm',
        'ReportDefinition'    => 'cm',
        'ServicedAccount'     => 'mcm',
        'TargetingIdea'       => 'o',
        'TrafficEstimator'    => 'o',
        'UserList'            => 'cm',
    );

    /**
     * The constructor for the AdWords API SOAP client factory.
     *
     * @param \AdWords\User $user           the user which the client will use for credentials
     * @param string        $server         the server to generate clients for
     * @param bool          $validateOnly   if the clients should be created in validateOnly mode
     * @param bool          $partialFailure if the service should be created in partialFailure mode
     */
    public function __construct(User $user, $server = null, $validateOnly = false, $partialFailure = false)
    {
        $headerOverrides = array();
        if (isset($validateOnly) || isset($partialFailure)) {
            $headerOverrides['validateOnly'] = $validateOnly;
            $headerOverrides['partialFailure'] = $partialFailure;
        }

        $this->setUser($user);
        $this->setServer($server ? $server : $this->defaultServer);
        $this->headerOverrides = $headerOverrides;
    }

    /**
     * Generates a SOAP client for the given service name.
     *
     * Generates a user level error if this installation of PHP does not have the extension for SOAP installed.
     *
     * @param string $serviceName the name of the service to generate a client for
     * @return \AdWords\SoapClient an instantiated SOAP client
     */
    public function generateSoapClient($serviceName)
    {
        if (!extension_loaded('soap')) {
            trigger_error(
                'This client library requires the SOAP extension to be'
                . ' activated. See http://php.net/manual/en/soap.installation.php for'
                . ' details.',
                E_USER_ERROR
            );
        }

        $soapClient = $this->generateServiceClient($serviceName);
        return $soapClient;
    }

    /**
     * Generates the SOAP service client without the proper headers set yet.
     *
     * @param string $serviceName the service to create a client for
     * @return AdsSoapClient the SOAP service client
     * @access protected
     */
    protected function generateServiceClient($serviceName)
    {
        $location = $this->getServiceLocation($serviceName);
        $wsdl = $location . '?wsdl';
        $options = array(
            'trace'              => TRUE,
            'encoding'           => 'utf-8',
            'connection_timeout' => 0,
            'features'           => SOAP_SINGLE_ELEMENT_ARRAYS
        );

        // TODO: Compression settings.
        // TODO: WSDL caching settings.
        // TODO: Proxy settings.
        // TODO: SSL settings.

        $serviceClass = $this->getServiceClassByServiceName($serviceName);
        /** @var SoapClient $soapClient */
        $soapClient = new $serviceClass($wsdl, $options, $this->getUser());
        $soapClient->__setLocation($location);

        // Copy headers from user.
        $user = $this->getUser();
        $userHeaders = array(
            'authToken'        => $user->getAuthToken(),
            'clientCustomerId' => $user->getClientId(),
            'developerToken'   => $user->getDeveloperToken(),
            'userAgent'        => $user->getUserAgent(),
        );
        $userHeaders = array_filter($userHeaders, function($x) { return !empty($x); });
        foreach($userHeaders as $key => $value) {
            $soapClient->setHeaderValue($key, $value);
        }

        // Copy headers from overrides.
        if (isset($this->headerOverrides)) {
            foreach($this->headerOverrides as $key => $value) {
                $soapClient->setHeaderValue($key, $value);
            }
        }

        return $soapClient;
    }

    /**
     * Gets the user associated with this factory.
     *
     * @return \AdWords\User the user associated with this factory
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user associated with this factory.
     *
     * @param \AdWords\User $user the user associated with this factory
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * Gets the version associated with this factory.
     *
     * @return string the version associated with this factory
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Gets the server associated with this factory.
     *
     * @return string the server associated with this factory
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Sets the server associated with this factory.
     *
     * @param string $server the server associated with this factory
     */
    public function setServer($server)
    {
        $this->server = $server;
    }


    /**
     * Returns fully qualified service class name
     *
     * @param string $serviceName
     * @return string service class name with namespace
     */
    private function getServiceClassByServiceName($serviceName)
    {
        return sprintf(
            $this->classNameMask,
            $this->getNamespaceTagByServiceName($serviceName),
            $this->version,
            $serviceName
        );
    }

    /**
     * Gets the end-point location of the service.
     *
     * @param string $serviceName the service to instantiate
     * @return string the end-point location of the service.
     * @access protected
     */
    private function getServiceLocation($serviceName)
    {
        return sprintf(
            $this->locationMask,
            $this->getServer(),
            $this->getNamespaceTagByServiceName($serviceName),
            $serviceName
        );
    }

    private function getNamespaceTagByServiceName($serviceName)
    {
        return $this->serviceNsMap[$serviceName];
    }
}
