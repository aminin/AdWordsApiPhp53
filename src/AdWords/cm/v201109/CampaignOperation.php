<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class CampaignOperation extends Operation
{
    /**
     * Changes the bidding strategy for this campaign. Use only when performing a
     * SET operation.
     * @var \AdWords\cm\v201109\BiddingTransition
     */
    public $biddingTransition;
    /**
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Campaign
     */
    public $operand;
}