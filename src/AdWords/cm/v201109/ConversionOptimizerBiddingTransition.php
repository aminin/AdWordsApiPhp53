<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingTransition;


class ConversionOptimizerBiddingTransition extends BiddingTransition
{
    /**
     * Indicate to use the existing bids, if there are previously saved CPA bids
     * for the AdGroup during transition of campaign from
     * {@link ManualCPC} to {@link ConversionOptimizer}.
     * @var string
     */
    public $useSavedBids;
}