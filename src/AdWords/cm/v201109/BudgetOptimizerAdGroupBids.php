<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class BudgetOptimizerAdGroupBids extends AdGroupBids
{
    /**
     * Proxy bid set by budget optimizer:
     * This field can be selected using the value &quot;ProxyKeywordMaxCpc&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Bid
     */
    public $proxyKeywordMaxCpc;
    /**
     * Proxy bid set by budget optimizer:
     * This field can be selected using the value &quot;ProxySiteMaxCpc&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Bid
     */
    public $proxySiteMaxCpc;
    /**
     * The flag to indicate the enhanced CPC bidding is turned on for the campaign
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $enhancedCpcEnabled;
}