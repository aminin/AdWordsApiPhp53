<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingStrategy;


class ManualCPC extends BiddingStrategy
{
    /**
     * The enhanced CPC bidding option for the campaign, which enables
     * bids to be enhanced based on conversion optimizer data.
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * @var string
     */
    public $enhancedCpcEnabled;
}