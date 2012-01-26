<?php

namespace AdWords\cm\v201109;



class Dimensions 
{
    /**
     * Width of the dimension
     * This field can be selected using the value &quot;Width&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $width;
    /**
     * Height of the dimension
     * This field can be selected using the value &quot;Height&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $height;
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