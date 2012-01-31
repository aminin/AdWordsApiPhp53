<?php

namespace AdWords\o\v201109;

use AdWords\cm\v201109\ApiError;


class TargetingIdeaError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\o\v201109\TargetingIdeaErrorReason
     */
    public $reason;
}