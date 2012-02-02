<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\EstimateRequest;


class AdGroupEstimateRequest extends EstimateRequest
{
    /**
     * The adGroupId for an ad group that belongs to the containing campaign from
     * {@link CampaignEstimateRequest} or {@code null}.
     * 
     * For usage, refer to document from {@link CampaignEstimateRequest}.
     * @var string
     */
    public $adGroupId;
    /**
     * The keywords to estimate.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\KeywordEstimateRequest
     */
    public $keywordEstimateRequests;
    /**
     * The max CPC bid to use for estimates for this ad group.
     * 
     * This value overrides the max CPC of AdGroup specified by
     * {@link #adGroupId}.
     * @var \AdWords\cm\v201109\Money
     */
    public $maxCpc;
}