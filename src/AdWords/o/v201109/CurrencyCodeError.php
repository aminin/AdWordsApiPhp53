<?php

namespace AdWords\o\v201109;

use AdWords\cm\v201109\ApiError;


class CurrencyCodeError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\o\v201109\CurrencyCodeErrorReason
     */
    public $reason;
}