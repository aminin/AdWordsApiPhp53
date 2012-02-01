<?php

namespace AdWords\mcm\v201109;

use AdWords\cm\v201109\ApiError;


class ServicedAccountError extends ApiError
{
    /**
     * @var \AdWords\mcm\v201109\ServicedAccountErrorReason
     */
    public $reason;
}