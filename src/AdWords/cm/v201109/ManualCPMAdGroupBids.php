<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class ManualCPMAdGroupBids extends AdGroupBids
{
    /**
     * Max CPM (cost per thousand impressions) bid.
     * This field can be selected using the value &quot;MaxCpm&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $maxCpm;
}