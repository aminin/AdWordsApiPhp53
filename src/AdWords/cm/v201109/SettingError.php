<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class SettingError extends ApiError
{
    /**
     * The setting error reason.
     * @var \AdWords\cm\v201109\SettingErrorReason
     */
    public $reason;
}