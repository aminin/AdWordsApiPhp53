<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class RateExceededError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\RateExceededErrorReason
     */
    public $reason;
    /**
     * Cause of the rate exceeded error.
     * @var string
     */
    public $rateName;
    /**
     * The scope of the rate (ACCOUNT/DEVELOPER).
     * @var string
     */
    public $rateScope;
    /**
     * The amount of time (in seconds) the client should wait before retrying the request.
     * @var string
     */
    public $retryAfterSeconds;
}