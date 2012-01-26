<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class QuotaError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\QuotaErrorReason
     */
    public $reason;
    /**
     * The number of entities allowed for this quota.
     * @var string
     */
    public $limit;
}