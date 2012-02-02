<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Estimate;


class AdGroupEstimate extends Estimate
{
    /**
     * The adGroupId of the ad group specified in the request.
     * 
     * This will be null for new ad groups.
     * @var string
     */
    public $adGroupId;
    /**
     * The estimates for the keywords specified in the request.
     * 
     * The list of estimates are returned in the same order as the keywords that
     * were sent in the request.
     * @var \AdWords\o\v201109\KeywordEstimate
     */
    public $keywordEstimates;
}