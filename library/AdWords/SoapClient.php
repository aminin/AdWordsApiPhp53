<?php
/**
 * An extension of the {@link AdsSoapClient} for the AdWords API.
 *
 * PHP version 5.3
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
 * An extension of the {@link AdsSoapClient} for the AdWords API.
 *
 * @package AdWords
 */
class SoapClient extends \SoapClient
{
    /**
     * The SoapClient options used to construct this class.
     *
     * @var array
     */
    protected $options;

    /**
     * The {@link User} which generated this client.
     *
     * @var User the user that generated this client
     */
    protected $user;

    /**
     * The header values.
     *
     * @var array the header values
     */
    protected $headers;

    /**
     * The name of the service this client is accessing.
     *
     * @var string the name of the service this client is accessing
     */
    protected $serviceName;

    /**
     * The namespace of the service this client is accessing.
     *
     * @var string the namespace of the service this client is accessing
     */
    protected $serviceNamespace;

    /**
     * The last SOAP XML request made to the server after removeSensitiveInfo() have been called on it.
     *
     * @var string the last SOAP XML request made to the server
     * @see removeSensitiveInfo()
     */
    protected $lastRequest;

    /**
     * The last SOAP XML DOMDocument request made to the server after removeSensitiveInfo() have been called on it.
     *
     * @var \DOMDocument the last SOAP XML request made to the server.
     * Can be null if the last request was not proper XML
     * @see removeSensitiveInfo()
     */
    private $lastRequestDom;

    /**
     * The last SOAP XML response from the server.
     *
     * @var string the last SOAP XML response from the server
     */
    protected $lastResponse;

    /**
     * The last SOAP XML DOMDocument response from the server.
     *
     * @var \DOMDocument the last SOAP XML response from the server. Can be null if the last request was not proper XML
     */
    private $lastResponseDom;

    /**
     * The last SOAP fault generated from the server. null if none.
     *
     * @var \SOAPFault the last SOAP fault generated from the server
     */
    protected $lastSoapFault;

    /**
     * The name of the last method called from this client.
     *
     * @var string the name of the last method called from this client
     */
    protected $lastMethodName;

    /**
     * The last arguments passed to the called SOAP method
     *
     * @var array the last arguments passed to the called SOAP method
     */
    protected $lastArguments;

    /**
     * The last headers used in the request.
     *
     * @var array the last headers used in the request
     */
    protected $lastHeaders;

    /**
     * Constructor for the AdWords API SOAP client.
     *
     * @param string $wsdl             URI of the WSDL file or <var>null</var> if working in non-WSDL mode
     * @param array  $options          the SOAP client options
     * @param User   $user             the user which is responsible for this client
     * @param string $serviceName      the name of the service which is making this call
     * @param string $serviceNamespace the namespace uri of the service
     */
    public function __construct($wsdl, array $options, User $user, $serviceName, $serviceNamespace)
    {
        $this->user             = $user;
        $this->serviceName      = $serviceName;
        $this->serviceNamespace = $serviceNamespace;
        $options['typemap']     = $this->getTypeMaps();
        $this->options          = $options;
        parent::__construct($wsdl, $options);
    }

    /**
     * Overrides the method __doRequest().  When OAuth authentication is used the URL has OAuth parameters added.
     *
     * @param string $request the request XML
     * @param string $location the URL to request
     * @param string $action the SOAP action
     * @param string $version the SOAP version
     * @param int $one_way if set to 1, this method returns nothing
     * @return string the XML SOAP response
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        // Make php to copy (on write) the request VALUE, instead of its REFERENCE
        // To prevent further segmentation fault
        $this->lastRequest = $request . '';
        return parent::__doRequest($request, $location, $action, $version);
    }

    /**
     * Overrides the method SoapClient.__soapCall() to process the response from the SOAP call.
     *
     * @param string $functionName  the name of the function being called
     * @param array  $arguments     the arguments to that function
     * @param array  $options       the options for the SOAP call
     * @param array  $inputHeaders  the optional input headers
     * @param array  $outputHeaders the options output headers
     * @return mixed the return from the parent __soapCall
     * @throws \SOAPFault if there was an exception making the request
     */
    public function __soapCall($functionName, $arguments, $options = array(), $inputHeaders = array(), &$outputHeaders = null)
    {
        try {
            $inputHeaders[]      = $this->generateSoapHeader();
            $this->lastHeaders   = $inputHeaders;
            $this->lastArguments = $arguments;
            $options             = array_merge($this->options, $options);
            $response            = parent::__soapCall($functionName, $arguments, $options, $inputHeaders, $outputHeaders);
            $this->processResponse($this->lastRequest, $this->__getLastResponse(), $functionName);
            return $response;
        } catch (\SoapFault $e) {
            $this->processResponse($this->lastRequest, $this->__getLastResponse(), $functionName, $e);
            throw $e;
        }
    }

    /**
     * Gets the effective user the request was made against.
     *
     * @return string the effective user the request was made against
     */
    public function getEffectiveUser()
    {
        return $this->getUser()->getClientId();
    }

    /**
     * Gets the last set of operators the last call in the form of "operator1,operator2".
     *
     * @return string the last set of operators
     */
    public function getLastOperators()
    {
        try {
            $operatorStrings = array();
            $operatorCounters = array();
            $operatorElements = $this->getLastRequestDom()->getElementsByTagName('operator');

            foreach ($operatorElements as $operatorElement) {
                if (array_key_exists($operatorElement->nodeValue, $operatorCounters)) {
                    $operatorCounters[$operatorElement->nodeValue] += 1;
                } else {
                    $operatorCounters[$operatorElement->nodeValue] = 1;
                }
            }

            foreach ($operatorCounters as $operator => $numOps) {
                $operators[] = sprintf('%s: %d', $operator, $numOps);
            }

            return sprintf('{%s}', implode(', ', $operatorStrings));
        } catch (\DOMException $e) {
            // TODO(api.arogal): Log failures to retrieve headers.
            return 'null';
        }
    }

    /**
     * Gets the last number of operations.
     *
     * @return string the last number of operations
     */
    public function getLastOperations()
    {
        try {
            $operationsElements =
                    $this->getLastResponseDom()->getElementsByTagName('operations');
            foreach ($operationsElements as $operationsElement) {
                return $operationsElement->nodeValue;
            }
        } catch (\DOMException $e) {
            // TODO(api.arogal): Log failures to retrieve headers.
            return 'null';
        }
    }

    /**
     * Gets the last number of units.
     *
     * @return string the last number of units
     */
    public function getLastUnits()
    {
        try {
            $unitsElements = $this->getLastResponseDom()->getElementsByTagName('units');
            foreach ($unitsElements as $unitsElement) {
                return $unitsElement->nodeValue;
            }
        } catch (\DOMException $e) {
            // TODO(api.arogal): Log failures to retrieve headers.
            return 'null';
        }
    }

    /**
     * Generates the request info message
     *
     * The request info message contains:
     * - email
     * - effectiveUser
     * - service
     * - method
     * - operators
     * - responseTime
     * - requestId
     * - operations
     * - units
     * - server
     * - isFault
     * - faultMessage
     * @return string the request info message to log
     */
    protected function generateRequestInfoMessage()
    {
        $messageFields = array(
            'email'         => $this->getEmail(),
            'effectiveUser' => $this->getEffectiveUser(),
            'service'       => $this->getServiceName(),
            'method'        => $this->getLastMethodName(),
            'operators'     => $this->getLastOperators(),
            'responseTime'  => $this->getLastResponseTime(),
            'requestId'     => $this->getLastRequestId(),
            'operations'    => $this->getLastOperations(),
            'units'         => $this->getLastUnits(),
            'server'        => $this->getServer(),
            'isFault'       => $this->isFault() ? 'true' : 'false',
            'faultMessage'  => $this->getLastFaultMessage()
        );
        $message = array();
        foreach ($messageFields as $k => $v) {
            $message[] = "$k=$v";
        }

        return implode(' ', $message);
    }


    /**
     * Generates the SOAP header for the client.
     *
     * @return SoapHeader the instantiated SoapHeader ready to set
     */
    protected function generateSoapHeader()
    {
        // TODO refactor
        $headerObject = $this->create('SoapHeader');
        foreach (get_object_vars($headerObject) as $var => $value) {
            $headerObject->$var = $this->getHeaderValue($var);
        }
        return new \SoapHeader($this->serviceNamespace, 'RequestHeader', $headerObject, false);
    }

    /**
     * Removes the authentication token from the request before being logged.
     *
     * @param string $request the request with sensitive data to remove
     * @return string the request with the authentication token removed
     */
    protected function removeSensitiveInfo($request)
    {
        $result = preg_replace('/(.*authToken>)(.*)(<\/.*authToken>.*)/sU', '\1*****\3', $request);
        return isset($result) ? $result : $request;
    }

    /**
     * Processes the response from the __doRequest call.
     *
     * @param string $request  the request to the server
     * @param string $response the response from the server
     * @param string $method   the method called
     * @param \SoapFault $e the SOAP fault thrown if any
     */
    private function processResponse($request, $response, $method, \SoapFault $e = null)
    {
        $this->lastSoapFault   = $e;
        $this->lastRequestDom  = null;
        $this->lastResponseDom = null;
        $this->lastRequest     = $this->removeSensitiveInfo($request);
        $this->lastResponse    = $response;
        $this->lastMethodName  = $method;

        try {
            $this->getLastResponseDom();
        } catch (\DOMException $domException) {
            trigger_error('Failed to load response into DOM: ' . $domException->getMessage(), E_USER_NOTICE);
        }

        try {
            $this->getLastRequestDom();
        } catch (\DOMException $domException) {
            trigger_error('Failed to load request into DOM: ' . $domException->getMessage(), E_USER_NOTICE);
        }

        $this->logSoapXml();
        $this->logRequestInfo();
    }

    /**
     * Logs the SOAP XML to the log
     *
     * After both the request and response have been sanitized by removeSensitiveInfo().
     *
     * @see removeSensitiveInfo()
     */
    private function logSoapXml()
    {
        $message = sprintf(
            "%s\n\n%s\n\n%s\n\n%s\n",
            trim($this->__getLastRequestHeaders()),
            self::PrettyPrint($this->lastRequest),
            trim($this->__getLastResponseHeaders()),
            self::PrettyPrint($this->lastResponse)
        );
    }

    /**
     * Logs the request info to the log
     *
     * After both the request and response has been sanitized by removeSensitiveInfo().
     *
     * @see removeSensitiveInfo()
     */
    private function logRequestInfo()
    {
        $message = $this->generateRequestInfoMessage($this->lastRequest, $this->lastResponse, $this->lastSoapFault);
    }
   
    /**
     * Gets the user for this client.
     *
     * @return User the user for this client.
     */
    public function getUser()
    {
        return $this->user;
    }
   
    /**
     * Gets the server that the request was made to.
     *
     * @return string the server that the request was made to
     */
    public function getServer()
    {
        preg_match('/^.*Host:\\s(.*)Connection:.*$/s', $this->__getLastRequestHeaders(), $hostMatches);
        if (sizeof($hostMatches) >= 2) {
            return trim($hostMatches[1]);
        } else {
            return null;
        }
    }
   
    /**
     * Gets the email of the user making the request.
     *
     * @return string the email of the user making the request
     */
    public function getEmail()
    {
        return $this->user->getEmail();
    }
   
    /**
     * Gets the service name for this client.
     *
     * @return string the service name for this client
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }
   
    /**
     * Gets the method name for the last method called.
     *
     * @return string the name of last method called
     */
    public function getLastMethodName()
    {
        return $this->lastMethodName;
    }
   
    /**
     * Gets the response time for the last call
     *
     * @return double the response time of the last call
     */
    public function getLastResponseTime()
    {
        try {
            $responseTimeElements = $this->getLastResponseDom()->getElementsByTagName('responseTime');
            foreach ($responseTimeElements as $responseTimeElement) {
                return $responseTimeElement->nodeValue;
            }
        } catch (\DOMException $e) {
            trigger_error('Failed to load response into DOM: ' . $e->getMessage(), E_USER_NOTICE);
            return "null";
        }
    }
   
    /**
     * Gets the request ID for the last call
     *
     * @return string the request ID of the last call
     */
    public function getLastRequestId()
    {
        try {
            $requestIdElements = $this->getLastResponseDom()->getElementsByTagName('requestId');
            foreach ($requestIdElements as $requestIdElement) {
                return $requestIdElement->nodeValue;
            }
        } catch (\DOMException $e) {
            trigger_error('Failed to load response into DOM: ' . $e->getMessage(), E_USER_NOTICE);
            return 'null';
        }
    }
   
    /**
     * Returns true if there was a SOAP fault during the last call.
     *
     * @return bool true if there was a SOAP fault during the last call
     */
    public function isFault()
    {
        return isset($this->lastSoapFault);
    }
   
    /**
     * Returns the SOAP fault message if there was any
     *
     * @return string the fault message if there was any
     */
    public function getLastFaultMessage()
    {
        return $this->isFault() ? $this->lastSoapFault->getMessage() : 'null';
    }

    /**
     * Gets the names of all registered request header elements.
     *
     * @return array the names of the request header elements
     */
    public function getHeaderNames()
    {
        return array_keys($this->headers);
    }
   
    /**
     * Gets the value for a registered request header element.
     *
     * @param string $key the name of the request header element
     * @return string the value of the request header element or null if not found
     */
    public function getHeaderValue($key)
    {
        if (array_key_exists($key, $this->headers)) {
            return $this->headers[$key];
        } else {
            return null;
        }
    }
   
    /**
     * Sets the value for a request header.
     *
     * @param string $key the name of the request header element
     * @param string $value the value for the request header element
     */
    public function setHeaderValue($key, $value)
    {
        $this->headers[$key] = $value;
    }
   
    /**
     * Gets the DOMDocument representing the last response from this client.
     *
     * @return \DOMDocument the DOMDocument representing the last response
     * @throws \DOMException if the DOMDocument could not be loaded
     */
    public function getLastResponseDom()
    {
        if (!isset($this->lastResponseDom)) {
            $this->lastResponseDom = self::getDomFromXml($this->lastResponse);
        }
   
        return $this->lastResponseDom;
    }
   
    /**
     * Get the DOMDocument representing the last request from this client.
     *
     * @return \DOMDocument the DOMDocument representing the last request
     * @throws \DOMException if the DOMDocument could not be loaded
     */
    public function getLastRequestDom()
    {
        if (!isset($this->lastRequestDom)) {
            $this->lastRequestDom = self::getDomFromXml($this->lastRequest);
        }
   
        return $this->lastRequestDom;
    }
   
    /**
     * Returns the typemaps to be used when constructing the SOAP client.
     *
     * @return array the typemap entries
     */
    private function getTypeMaps()
    {
        $typeMaps = array();
        // Convert longs more intelligently, due to overflow issue in 32 bit environments.
        $typeMaps[] = array(
            'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
            'type_name' => 'long',
            'from_xml'  => '\\AdWords\\SoapClient::TypeMapLongFromXml',
            'to_xml'    => '\\AdWords\\SoapClient::TypeMapLongToXml'
        );
        return $typeMaps;
    }
   
    /**
     * A typemap conversion function for parsing long values in SOAP responses.
     *
     * @param string $xml the XML snippet containing the long value.
     * @return mixed the inner long value as an integer, float, or string
     */
    public static function typeMapLongFromXml($xml)
    {
        $document = self::getDomFromXml($xml);
        $tag = $document->documentElement->localName;
        $value = $document->documentElement->nodeValue;
        $isIdField = preg_match('/^id$/i', $tag);
        if (!$isIdField) {
            if (strcmp(strval(intval($value)), $value) === 0) {
                return intval($value);
            } elseif (strcmp(sprintf('%.0f', floatval($value)), $value) === 0) {
                return floatval($value);
            }
        }
        return $value;
    }
   
    /**
     * A type map conversion function for serializing long values in SOAP requests.
     *
     * @param mixed $value the long value
     * @return string an XML snippet with the serialized value
     */
    public static function typeMapLongToXml($value)
    {
        if (is_float($value)) {
            $value = sprintf('%.0f', $value);
        }
        // Any outer XML tag can be used here, as it is later removed by SoapClient.
        return sprintf('<value>%s</value>', $value);
    }

    /**
     * Creates a new object of the given type, using the optional parameters.
     *
     * When pseudo-namespace support is enabled class names can become very long,
     * and this function provides an alternative way to create objects that is
     * more readable.
     *
     * @param string $type the type of object to create
     * @param array $params parameters to pass into the constructor, as either
     *     flat array in the correct order for the constructor or as an
     *     associative array from parameter name to value
     * @return mixed a new instance of a class that represents that type
     */
    private function create($type, $params = null)
    {
        if (array_key_exists($type, $this->options['classmap'])) {
            $class = $this->options['classmap'][$type];
            $reflectionClass = new \ReflectionClass($class);
            if (isset($params)) {
                if (sizeof(array_filter(array_keys($params), 'is_string'))) {
                    $methodParams = $reflectionClass->getConstructor()->getParameters();
                    $result = array_fill(0, sizeof($params), NULL);
                    foreach ($methodParams as $param) {
                        if (isset($map[$param->getName()])) {
                            $result[$param->getPosition()] = $map[$param->getName()];
                        }
                    }
                    $params = $result;
                }
                return $reflectionClass->newInstanceArgs($params);
            } else {
                return $reflectionClass->newInstance();
            }
        } else {
            trigger_error('Unknown type: ' . $type, E_USER_ERROR);
        }
    }

    /**
     * Gets the DOMDocument of the <var>$xml</var>.
     *
     * @param string $xml the XML to create a DOMDocument from
     * @return \DOMDocument the DOMDocument of the XML
     * @throws \DOMException if the DOM could not be loaded
     */
    private static function getDomFromXml($xml)
    {
        set_error_handler(
            function($errno, $errstr) {
                if ($errno == E_WARNING && substr_count($errstr, 'DOMDocument::loadXML()') > 0) {
                    throw new \DOMException($errstr);
                } else {
                    return false;
                }
            }
        );
        $dom = new \DOMDocument();
        if (!empty($xml))
            $dom->loadXML($xml, LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_NOENT | LIBXML_XINCLUDE);
        restore_error_handler();
        return $dom;
    }

    /**
     * Gets the XML represenation of the document.
     *
     * @param \DOMDocument $document the document to convert
     * @return string the XML represenation of the document
     */
    private static function getXmlFromDom(\DOMDocument $document)
    {
        return trim($document->saveXml());
    }

    /**
     * Returns a pretty printed XML. If the XML cannot be loaded a string stripped of any newlines is returned.
     *
     * @param string $xml the XML to pretty print
     * @return string a pretty printed string
     */
    private static function prettyPrint($xml)
    {
        try {
            $dom = self::getDomFromXml($xml);
            $dom->formatOutput = true;
            return self::getXmlFromDom($dom);
        } catch (\DOMException $e) {
            restore_error_handler();
            return str_replace(array("\r\n", "\n", "\r"), '', $xml);
        }
    }
}
