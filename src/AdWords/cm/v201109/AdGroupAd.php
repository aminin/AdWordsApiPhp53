<?php

namespace AdWords\cm\v201109;



class AdGroupAd 
{
    /**
     * The id of the adgroup containing this ad.
     * This field can be selected using the value &quot;AdGroupId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $adGroupId;
    /**
     * The contents of the ad itself.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Ad
     */
    public $ad;
    /**
     * Experiment data associated with this {@link AdGroupAd}.
     * @var \AdWords\cm\v201109\AdGroupAdExperimentData
     */
    public $experimentData;
    /**
     * The status of the ad.
     * This field can be selected using the value &quot;Status&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET.
     * @var \AdWords\cm\v201109\AdGroupAdStatus
     */
    public $status;
    /**
     * Statistics about this ad.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\AdStats
     */
    public $stats;

    public function __construct($adGroupId = null, $ad = null, $experimentData = null, $status = null, $stats = null)
    {
        $this->adGroupId = $adGroupId;
        $this->ad = $ad;
        $this->experimentData = $experimentData;
        $this->status = $status;
        $this->stats = $stats;
    }
}