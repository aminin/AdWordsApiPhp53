<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class OperationAccessDenied extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\OperationAccessDeniedReason
     */
    public $reason;
}