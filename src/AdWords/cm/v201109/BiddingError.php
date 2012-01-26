<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class BiddingError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\BiddingErrorReason
     */
    public $reason;
}