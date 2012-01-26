<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class QuotaCheckError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\QuotaCheckErrorReason
     */
    public $reason;
}