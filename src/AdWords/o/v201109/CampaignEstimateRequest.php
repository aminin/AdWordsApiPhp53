<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\EstimateRequest;


class CampaignEstimateRequest extends EstimateRequest
{
    /**
     * The campaignId of an existing campaign or {@code null}.
     * 
     * Refer to the {@link CampaignEstimateRequest} documentation for
     * detailed usage.
     * @var string
     */
    public $campaignId;
    /**
     * The list of ad groups to estimate. At least one ad group is required.
     * 
     * New campaigns may only contain new ad groups. If an
     * {@link AdGroupEstimateRequest} has an adGroupId but the campaign is new,
     * the API will return an error.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\AdGroupEstimateRequest
     */
    public $adGroupEstimateRequests;
    /**
     * A list of {@link Criterion}s to be used for this Campaign. Criteria
     * provide information about geographical and language targeting.
     * 
     * Values in this field override the current targets in the Campaign
     * specified by {@link #campaignId} by the following mechanism:
     * 
     * This field accepts two types of {@link Criterion}s: {@link Location},
     * which should contain all geographic targeting and {@link Language}, which
     * should contain all language targeting. If {@link Location}s are passed in,
     * all geographic targeting in the campaign will be overridden. If any
     * {@link Language}s are passed in, all language targeting in the campaign
     * will be overridden.
     * 
     * If multiple {@link Location}s are specified, the traffic estimate will
     * be the sum of the estimates for each targeted area. This means that if
     * criteria are chosen which overlap each other (for example, targeting both a
     * country and a city within that country), the traffic estimate will be
     * be larger than if no overlap were present - i. e., the overlap region will
     * be double-counted in the estimate.
     * 
     * If no criteria are specified and this is for a new campaign then it
     * will default to all languages in all countries and territories, and
     * Google search.
     * 
     * If no criteria are specified and this is for an existing campaign
     * then the current targeting on that campaign will be used.
     * 
     * While there&#039;s no solid limit on number of criteria,
     * TrafficEstimatorService may return error with TOO_MANY_TARGETS if the
     * request contains too many criteria across all
     * {@link CampaignEstimateRequest}s in a {@link TrafficEstimatorSelector}.
     * 
     * Supported Criteria : {@link Language} and {@link Location}
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var \AdWords\cm\v201109\Criterion
     */
    public $criteria;
    /**
     * A {@link NetworkSetting} to be used for this Campaign. The value of this field
     * overrides the current targets in the Campaign specified by {@link #campaignId}.
     * 
     * Only {@link NetworkSetting#targetGoogleSearch} and
     * {@link NetworkSetting#targetSearchNetwork} are supported, they may be
     * combined to sum the estimates.
     * 
     * If both request network setting and Campaign&#039;s network setting are
     * empty, the default is {@link NetworkSetting#targetGoogleSearch}.
     * @var \AdWords\cm\v201109\NetworkSetting
     */
    public $networkSetting;
    /**
     * Daily campaign budget to use in traffic estimation.  If not specified,
     * the daily budget is unlimited.
     * @var \AdWords\cm\v201109\Money
     */
    public $dailyBudget;
}