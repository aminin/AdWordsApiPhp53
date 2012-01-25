<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterionExperimentBidMultiplier;


class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier
{
    /**
     * Multiplier used for adjusting bids in manual maximum CPC bidding strategies.
     * This field can be selected using the value &quot;MaxCpcMultiplier&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\BidMultiplier
     */
    public $maxCpcMultiplier;
    /**
     * This field can be selected using the value &quot;MultiplierSource&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\MultiplierSource
     */
    public $multiplierSource;
}