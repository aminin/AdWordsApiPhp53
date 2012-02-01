<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingStrategy;


class BudgetOptimizer extends BiddingStrategy
{
    /**
     * The enhanced CPC bidding option for the campaign, which enables
     * bids to be enhanced based on conversion optimizer data. For more
     * information about enhanced CPC, see the article
     * What is Enhanced CPC?.
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * @var string
     */
    public $enhancedCpcEnabled;
    /**
     * Ceiling on bids placed by the budget optimizer.
     * This field can be selected using the value &quot;BidCeiling&quot;.
     * @var \AdWords\cm\v201109\Money
     */
    public $bidCeiling;
}