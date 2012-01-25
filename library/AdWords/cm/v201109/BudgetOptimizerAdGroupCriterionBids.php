<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterionBids;


class BudgetOptimizerAdGroupCriterionBids extends AdGroupCriterionBids
{
    /**
     * The effective bid set by the budget optimizer for this criterion.
     * @var \AdWords\cm\v201109\Bid
     */
    public $proxyBid;
    /**
     * The flag to indicate the enhanced CPC bidding is turned on and the criteria
     * bids may be enhanced based on conversion optimizer data.
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $enhancedCpcEnabled;
}