<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\DataEntry;


abstract class BidLandscape extends DataEntry
{
    /**
     * ID of the campaign that contains the criterion with which this bid
     * landscape is associated.
     * This field can be selected using the value &quot;CampaignId&quot;.This field can be filtered on.
     * @var string
     */
    public $campaignId;
    /**
     * ID of the ad group that contains the criterion with which this bid
     * landscape is associated.
     * This field can be selected using the value &quot;AdGroupId&quot;.This field can be filtered on.
     * @var string
     */
    public $adGroupId;
    /**
     * First day on which this landscape is based. Typically, it could be
     * up to a week ago.
     * This field can be selected using the value &quot;StartDate&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $startDate;
    /**
     * Last day on which this landscape is based.
     * This field can be selected using the value &quot;EndDate&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $endDate;
    /**
     * List of landscape points, each corresponding to a specifid bid amount.
     * @var \AdWords\cm\v201109\BidLandscapeLandscapePoint
     */
    public $landscapePoints;
}