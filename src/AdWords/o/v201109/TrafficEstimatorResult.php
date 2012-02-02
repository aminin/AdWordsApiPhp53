<?php

namespace AdWords\o\v201109;



class TrafficEstimatorResult 
{
    /**
     * The estimates for the campaigns specified in the request.
     * 
     * They are listed in the same order as the campaigns that were sent in the
     * request.
     * @var \AdWords\o\v201109\CampaignEstimate
     */
    public $campaignEstimates;

    public function __construct($campaignEstimates = null)
    {
        $this->campaignEstimates = $campaignEstimates;
    }
}