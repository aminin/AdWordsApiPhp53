<?php

namespace AdWords\cm\v201109;



class SoapResponseHeader 
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $methodName;
    /**
     * @var string
     */
    public $operations;
    /**
     * @var string
     */
    public $responseTime;
    /**
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