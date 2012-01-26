<?php

namespace AdWords\cm\v201109;



class BiddingTransition 
{
    /**
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\BiddingStrategy
     */
    public $targetBiddingStrategy;
    /**
     * User provide a single set of explicit adgroup level bid values to be copied
     * for all adgroups for the campaign while transitioning a campaign&#039;s bidding strategy.
     * E.g., while transitioning from manual CPC to manual CPM bidding,
     * user provides a maxCPM bid and all adgroups will be set to use that bid.
     * Explicit Bid is required for ManualCpc  ManualCPM,
     * optional for ManualCPC  ConversionOptimizer
     * and should not be specified for ManualCPC BudgetOptimizer
     * @var \AdWords\cm\v201109\AdGroupBids
     */
    public $explicitAdGroupBids;
    /**
     * Indicates that this instance is a subtype of BiddingTransition.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $BiddingTransitionType;
    private $_propertyMap = array (
        "BiddingTransition.Type" => "BiddingTransitionType",
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