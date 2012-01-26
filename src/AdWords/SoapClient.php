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

    protected $requestObserver;
    protected $responseObserver;

    /**
     * Constructor for the AdWords API SOAP client.
     *
     * @param string $wsdl             URI of the WSDL file or <var>null</var> if working in non-WSDL mode
     * @param array  $options          the SOAP client options
     */
    public function __construct($wsdl, array $options)
    {
        $this->serviceName      = isset($options['serviceName']) ? $options['serviceName'] : null;
        $this->serviceNamespace = isset($options['serviceNamespace']) ? $options['serviceNamespace'] : null;
        $this->requestObserver  = isset($options['requestObserver']) ? $options['requestObserver'] : null;
        $this->responseObserver = isset($options['responseObserver']) ? $options['responseObserver'] : null;
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
        $this->notifyRequestObserver($request, $location, $action);
        return parent::__doRequest($request, $location, $action, $version, $one_way);
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
    public function __soapCall(
        $functionName, $arguments, $options = array(), $inputHeaders = array(), &$outputHeaders = null
    )
    {
        try {
            $inputHeaders[]      = $this->generateSoapHeader();
            $this->lastArguments = $arguments;
            $this->lastMethodName= $functionName;
            $options             = array_merge($this->options, $options);
            $response            = parent::__soapCall(
                $functionName, $arguments, $options, $inputHeaders, $outputHeaders
            );
            $this->notifyResponseObserver();
            return $response;
        } catch (\SoapFault $e) {
            $this->notifyResponseObserver($e);
            throw $e;
        }
    }

    /**
     * Generates the SOAP header for the client.
     *
     * @return SoapHeader the instantiated SoapHeader ready to set
     */
    protected function generateSoapHeader()
    {
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
     * Notifies the response observer callback.
     *
     * @param \SoapFault $e the SOAP fault thrown if any
     */
    private function notifyResponseObserver(\SoapFault $e = null)
    {
        $request = $this->removeSensitiveInfo($this->__getLastRequest());

        $data = array(
            'requestHeaders'  => trim($this->__getLastRequestHeaders()),
            'request'         => $request,
            'responseHeaders' => trim($this->__getLastResponseHeaders()),
            'response'        => $this->__getLastResponse(),
            'method'          => $this->lastMethodName,
            'arguments'       => $this->lastArguments,
            'fault'           => $e
        );

        if (is_callable($this->responseObserver)) {
            call_user_func($this->responseObserver, $data);
        }
    }

    /**
     * Notifies the request observer callback.
     *
     * @param string $request  the request XML
     * @param string $location the URL to request
     * @param string $action   the SOAP action
     */
    private function notifyRequestObserver($request, $location, $action)
    {
        $request = $this->removeSensitiveInfo($request);

        $data = array(
            'request'  => $request,
            'location' => $location,
            'action'   => $action,
        );

        if (is_callable($this->requestObserver)) {
            call_user_func($this->requestObserver, $data);
        }
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
     * Gets the arguments for the last method called.
     *
     * @return array the name of last method called
     */
    public function getLastArguments()
    {
        return $this->lastArguments;
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
     * Sets the request observer.
     *
     * @param callback $requestObserver
     */
    public function setRequestObserver($requestObserver)
    {
        $this->requestObserver = $requestObserver;
    }

    /**
     * Sets the response observer.
     *
     * @param callback $responseObserver
     */
    public function setResponseObserver($responseObserver)
    {
        $this->responseObserver = $responseObserver;
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
        set_error_handler(
            function($errno, $errstr) {
                if ($errno == E_WARNING && substr_count($errstr, 'DOMDocument::loadXML()') > 0) {
                    throw new \DOMException($errstr);
                } else {
                    return false;
                }
            }
        );
        $document = new \DOMDocument();
        if (!empty($xml))
            $document->loadXML($xml, LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_NOENT | LIBXML_XINCLUDE);
        restore_error_handler();

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
                        /** @var \ReflectionParameter $param */
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
            throw new Exception('Unknown type: ' . $type);
        }
    }
}
