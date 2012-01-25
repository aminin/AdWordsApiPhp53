<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class CriterionError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\CriterionErrorReason
     */
    public $reason;
}