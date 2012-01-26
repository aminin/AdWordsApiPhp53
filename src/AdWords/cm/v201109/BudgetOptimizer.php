<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingStrategy;


class BudgetOptimizer extends BiddingStrategy
{
    /**
     * The enhanced CPC bidding option for the campaign, which enables
     * bids to be enhanced based on conversion optimizer data. For more
     * information about enhanced CPC, see the article
     * What is Enhanced CPC?.
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * @var string
     */
    public $enhancedCpcEnabled;
    /**
     * Ceiling on bids placed by the budget optimizer.
     * This field can be selected using the value &quot;BidCeiling&quot;.
     * @var \AdWords\cm\v201109\Money
     */
    public $bidCeiling;
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