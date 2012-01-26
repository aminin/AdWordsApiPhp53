<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterionBids;


class ManualCPCAdGroupCriterionBids extends AdGroupCriterionBids
{
    /**
     * Bid placed for this criterion. If position preference is
     * enabled, this value is used as the maximum proxy bid for the criterion.
     * To disable this criterion-level bid and use the ad group&#039;s bid, set this to 0.
     * This field can be selected using the value &quot;MaxCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $maxCpc;
    /**
     * The level (ad group or criterion) at which this bid was set.
     * This field can be selected using the value &quot;CpcBidSource&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\BidSource
     */
    public $bidSource;
    /**
     * If true, enhanced CPC bidding is enabled and
     * criteria bids may be enhanced based on conversion optimizer data.
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $enhancedCpcEnabled;
}