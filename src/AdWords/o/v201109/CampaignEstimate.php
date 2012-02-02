<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Estimate;


class CampaignEstimate extends Estimate
{
    /**
     * The campaignId of the campaign specified in the request.
     * 
     * This will be null for new campaigns.
     * @var string
     */
    public $campaignId;
    /**
     * The estimates for the ad groups belonging to this campaign in the request.
     * 
     * They will be returned in the same order that they were sent in the request.
     * @var \AdWords\o\v201109\AdGroupEstimate
     */
    public $adGroupEstimates;
}