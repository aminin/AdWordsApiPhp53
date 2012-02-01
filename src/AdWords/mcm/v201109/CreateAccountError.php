<?php

namespace AdWords\mcm\v201109;

use AdWords\cm\v201109\ApiError;


class CreateAccountError extends ApiError
{
    /**
     * @var \AdWords\mcm\v201109\CreateAccountErrorReason
     */
    public $reason;
}