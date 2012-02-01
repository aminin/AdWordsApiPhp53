<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupExperimentBidMultipliers;


class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers
{
    /**
     * This field can be selected using the value &quot;MaxCpcMultiplier&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\BidMultiplier
     */
    public $maxCpcMultiplier;
    /**
     * This field can be selected using the value &quot;MaxContentCpcMultiplier&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\BidMultiplier
     */
    public $maxContentCpcMultiplier;
}