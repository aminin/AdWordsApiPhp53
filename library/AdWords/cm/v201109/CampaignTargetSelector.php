<?php

namespace AdWords\cm\v201109;



class CampaignTargetSelector 
{
    /**
     * List of ids for the campaigns that targets are being retrieved.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var string
     */
    public $campaignIds;

    public function __construct($campaignIds = null)
    {
        $this->campaignIds = $campaignIds;
    }
}