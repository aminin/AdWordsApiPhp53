<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class BiddingTransitionError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\BiddingTransitionErrorReason
     */
    public $reason;
}