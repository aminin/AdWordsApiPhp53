<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingStrategy;


class ConversionOptimizer extends BiddingStrategy
{
    /**
     * Pricing model for the conversion optimizer bidding strategy,
     * Click for pay-per-click or Conversions for pay-per-conversions.
     * If the pricing model is not specified  it defaults to Clicks.
     * This field can be selected using the value &quot;PricingModel&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\PricingModel
     */
    public $pricingModel;
    /**
     * Bid type for the conversion optimizer campaign
     * This field can be selected using the value &quot;ConversionOptimizerBidType&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\ConversionOptimizerBidType
     */
    public $conversionOptimizerBidType;
    /**
     * Deduplication mode for the conversion optimizer campaign
     * This field can be selected using the value &quot;DeduplicationMode&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\ConversionDeduplicationMode
     */
    public $deduplicationMode;
}