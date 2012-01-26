<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class ConversionOptimizerAdGroupBids extends AdGroupBids
{
    /**
     * Target cost per acquisition/conversion.
     * This field can be selected using the value &quot;TargetCpa&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $targetCpa;
    /**
     * Bid type for the conversion optimizer campaign,
     * the values are maxCpa or targetCpa
     * This field can be selected using the value &quot;ConversionOptimizerBidType&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionOptimizerBidType
     */
    public $conversionOptimizerBidType;
    /**
     * Deduplication mode for the conversion optimizer campaign
     * This field can be selected using the value &quot;DeduplicationMode&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionDeduplicationMode
     */
    public $deduplicationMode;
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