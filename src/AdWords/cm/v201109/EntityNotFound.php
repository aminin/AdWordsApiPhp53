<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class EntityNotFound extends ApiError
{
    /**
     * Reason for this error.
     * @var \AdWords\cm\v201109\EntityNotFoundReason
     */
    public $reason;
}