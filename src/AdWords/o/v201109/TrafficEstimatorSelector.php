<?php

namespace AdWords\o\v201109;



class TrafficEstimatorSelector 
{
    /**
     * A list of all campaigns to estimate.
     * 
     * To create a Keyword estimates request, use {@code null} campaign id.
     * The maximum size of this collection is 5.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\CampaignEstimateRequest
     */
    public $campaignEstimateRequests;

    public function __construct($campaignEstimateRequests = null)
    {
        $this->campaignEstimateRequests = $campaignEstimateRequests;
    }
}