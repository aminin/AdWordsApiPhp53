<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class ConversionOptimizerAdGroupBids extends AdGroupBids
{
    /**
     * Target cost per acquisition/conversion.
     * This field can be selected using the value &quot;TargetCpa&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $targetCpa;
    /**
     * Bid type for the conversion optimizer campaign,
     * the values are maxCpa or targetCpa
     * This field can be selected using the value &quot;ConversionOptimizerBidType&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionOptimizerBidType
     */
    public $conversionOptimizerBidType;
    /**
     * Deduplication mode for the conversion optimizer campaign
     * This field can be selected using the value &quot;DeduplicationMode&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionDeduplicationMode
     */
    public $deduplicationMode;
}