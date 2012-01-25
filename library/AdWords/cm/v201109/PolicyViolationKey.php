<?php

namespace AdWords\cm\v201109;



class PolicyViolationKey 
{
    /**
     * Unique id of the violated policy.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $policyName;
    /**
     * The text that violates the policy if specified. Otherwise, refers to the
     * policy in general (e.g. when requesting to be exempt from the whole
     * policy).
     * 
     * May be null for criterion exemptions, in which case this refers to the
     * whole policy. Must be specified for ad exemptions.
     * @var string
     */
    public $violatingText;
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