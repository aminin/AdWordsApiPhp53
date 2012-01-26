<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class EntityAccessDenied extends ApiError
{
    /**
     * Reason for this error.
     * @var \AdWords\cm\v201109\EntityAccessDeniedReason
     */
    public $reason;
}