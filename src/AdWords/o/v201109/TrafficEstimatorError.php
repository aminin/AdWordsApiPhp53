<?php

namespace AdWords\o\v201109;

use AdWords\cm\v201109\ApiError;


class TrafficEstimatorError extends ApiError
{
    /**
     * @var \AdWords\o\v201109\TrafficEstimatorErrorReason
     */
    public $reason;
}