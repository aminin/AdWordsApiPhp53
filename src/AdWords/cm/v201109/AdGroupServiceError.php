<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class AdGroupServiceError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\AdGroupServiceErrorReason
     */
    public $reason;
    /**
     * The {@link AdGroupId} associated with this error.
     * @var string
     */
    public $adGroupId;
}