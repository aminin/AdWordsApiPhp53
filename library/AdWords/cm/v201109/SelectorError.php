<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class SelectorError extends ApiError
{
    /**
     * The error reason represented by enum.
     * @var \AdWords\cm\v201109\SelectorErrorReason
     */
    public $reason;
}