<?php

namespace AdWords\cm\v201109;



class SoapResponseHeader 
{
    /**
     * Unique id that identifies this request. If developers have any support issues, sending us
     * this id will enable us to find their request more easily.
     * @var string
     */
    public $requestId;
    /**
     * The name of the service being invoked.
     * @var string
     */
    public $serviceName;
    /**
     * The name of the method being invoked.
     * @var string
     */
    public $methodName;
    /**
     * Number of operations performed for this SOAP request.
     * @var string
     */
    public $operations;
    /**
     * Elapsed time in milliseconds between the AdWords API receiving the request and sending the
     * response.
     * @var string
     */
    public $responseTime;
    /**
     * Total number of API units the SOAP request used.
     * @var string
     */
    public $units;
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}