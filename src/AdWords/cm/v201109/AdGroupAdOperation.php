<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class AdGroupAdOperation extends Operation
{
    /**
     * AdGroupAd to operate on.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\AdGroupAd
     */
    public $operand;
    /**
     * Exemption requests for any policy violations in this Ad.  This field is
     * only used for ADD operations
     * @var \AdWords\cm\v201109\ExemptionRequest
     */
    public $exemptionRequests;
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