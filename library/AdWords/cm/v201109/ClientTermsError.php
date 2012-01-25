<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class ClientTermsError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\ClientTermsErrorReason
     */
    public $reason;
}