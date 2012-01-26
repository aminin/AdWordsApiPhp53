<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class RejectedError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\RejectedErrorReason
     */
    public $reason;
}