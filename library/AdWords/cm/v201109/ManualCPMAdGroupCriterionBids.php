<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterionBids;


class ManualCPMAdGroupCriterionBids extends AdGroupCriterionBids
{
    /**
     * Bid placed for this criterion.
     * To disable this criterion-level bid and use the ad group&#039;s bid, set this to 0.
     * This field can be selected using the value &quot;MaxCpm&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $maxCpm;
    /**
     * The level (ad group or criterion) at which this bid was set.
     * This field can be selected using the value &quot;CpmBidSource&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\BidSource
     */
    public $bidSource;
}