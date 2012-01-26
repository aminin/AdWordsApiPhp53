<?php

namespace AdWords\cm\v201109;



class TemplateElement 
{
    /**
     * Unique name for this element.
     * This field can be selected using the value &quot;UniqueName&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $uniqueName;
    /**
     * List of fields to use for this template element.
     * These must be the same for all template ads in the same template ad union.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\TemplateElementField
     */
    public $fields;
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