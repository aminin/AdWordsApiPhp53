<?php

namespace AdWords\o\v201109;

use AdWords\cm\v201109\ApiError;


class CollectionSizeError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\o\v201109\CollectionSizeErrorReason
     */
    public $reason;
}