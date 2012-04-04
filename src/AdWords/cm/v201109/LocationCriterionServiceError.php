<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class LocationCriterionServiceError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\LocationCriterionServiceErrorReason
     */
    public $reason;
}