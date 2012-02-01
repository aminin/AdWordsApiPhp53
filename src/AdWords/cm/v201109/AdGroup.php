<?php

namespace AdWords\cm\v201109;



class AdGroup 
{
    /**
     * ID of this ad group.
     * This field can be selected using the value &quot;Id&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET.
     * @var string
     */
    public $id;
    /**
     * ID of the campaign with which this ad group is associated.
     * This field can be selected using the value &quot;CampaignId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var string
     */
    public $campaignId;
    /**
     * Name of the campaign with which this ad group is associated.
     * This field can be selected using the value &quot;CampaignName&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $campaignName;
    /**
     * Name of this ad group (at most 255 UTF-8 full-width characters).
     * This field can be selected using the value &quot;Name&quot;.This field can be filtered on.
     * @var string
     */
    public $name;
    /**
     * Status of this ad group.
     * This field can be selected using the value &quot;Status&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\AdGroupStatus
     */
    public $status;
    /**
     * The default bid amounts for criteria in this ad group. The type of bid
     * (i.e. the type of this field) must match the parent campaign&#039;s
     * {@linkplain Campaign#biddingStrategy bidding strategy}.
     * @var \AdWords\cm\v201109\AdGroupBids
     */
    public $bids;
    /**
     * Data from a campaign bidding strategy experiment, returned by
     * {@link AdGroupService#get get()} only if the experimentId is supplied.
     * @var \AdWords\cm\v201109\AdGroupExperimentData
     */
    public $experimentData;
    /**
     * Statistics for this ad group, returned by {@link AdGroupService#get get()}
     * only if requested in the selector.
     * @var \AdWords\cm\v201109\Stats
     */
    public $stats;

    public function __construct($id = null, $campaignId = null, $campaignName = null, $name = null, $status = null, $bids = null, $experimentData = null, $stats = null)
    {
        $this->id = $id;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->name = $name;
        $this->status = $status;
        $this->bids = $bids;
        $this->experimentData = $experimentData;
        $this->stats = $stats;
    }
}