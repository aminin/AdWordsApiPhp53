<?php

namespace AdWords\cm\v201109;



abstract class ApiError 
{
    /**
     * @var string
     */
    public $fieldPath;
    /**
     * @var string
     */
    public $trigger;
    /**
     * @var string
     */
    public $errorString;
    /**
     * Indicates that this instance is a subtype of ApiError.
     *                 Although this field is returned in the response, it is ignored on input
     *                 and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $ApiErrorType;
    private $_propertyMap = array (
        "ApiError.Type" => "ApiErrorType",
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