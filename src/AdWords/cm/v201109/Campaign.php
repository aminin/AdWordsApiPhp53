<?php

namespace AdWords\cm\v201109;



class Campaign 
{
    /**
     * ID of this campaign.
     * This field can be selected using the value &quot;Id&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET.
     * @var string
     */
    public $id;
    /**
     * Name of this campaign. On add, defaults to Campaign #N.
     * This field can be selected using the value &quot;Name&quot;.This field can be filtered on.
     * This string must not be empty.
     * @var string
     */
    public $name;
    /**
     * Status of this campaign. On add, defaults to ACTIVE.
     * This field can be selected using the value &quot;Status&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\CampaignStatus
     */
    public $status;
    /**
     * Serving status.
     * This field can be selected using the value &quot;ServingStatus&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ServingStatus
     */
    public $servingStatus;
    /**
     * Date the campaign begins. On add, defaults to the current day
     * in the parent account&#039;s local timezone. The date&#039;s format should be YYYYMMDD.
     * This field can be selected using the value &quot;StartDate&quot;.This field can be filtered on.
     * @var string
     */
    public $startDate;
    /**
     * Date the campaign ends. On add, defaults to 20371231, which means the
     * campaign will run indefinitely. To set an existing campaign to run indefinitely, set this
     * field to 20371230. The date&#039;s format should be YYYYMMDD.
     * This field can be selected using the value &quot;EndDate&quot;.This field can be filtered on.
     * @var string
     */
    public $endDate;
    /**
     * Current base budget of campaign; default if no custom budgets are active.
     * @var \AdWords\cm\v201109\Budget
     */
    public $budget;
    /**
     * Bidding strategy for this campaign. This field is required when adding a new campaign.
     * To modify an existing campaign&#039;s bidding strategy, use {@link
     * CampaignOperation#biddingTransition}. Note that campaigns must meet specific
     * eligibility requirements before they can use the ConversionOptimizier
     * bidding strategy.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\BiddingStrategy
     */
    public $biddingStrategy;
    /**
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionOptimizerEligibility
     */
    public $conversionOptimizerEligibility;
    /**
     * Statistics for this campaign, returned by {@link CampaignService#get get()} only if
     * requested in the selector.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\CampaignStats
     */
    public $campaignStats;
    /**
     * Ad serving optimization status.
     * This field can be selected using the value &quot;AdServingOptimizationStatus&quot;.
     * @var \AdWords\cm\v201109\AdServingOptimizationStatus
     */
    public $adServingOptimizationStatus;
    /**
     * Frequency cap for this campaign.
     * @var \AdWords\cm\v201109\FrequencyCap
     */
    public $frequencyCap;
    /**
     * List of settings for the Campaign.
     * This field can be selected using the value &quot;Settings&quot;.
     * @var \AdWords\cm\v201109\Setting
     */
    public $settings;
    /**
     * The network settings for the campaign, to indicate where the campaign
     * will serve.
     * @var \AdWords\cm\v201109\NetworkSetting
     */
    public $networkSetting;
}