<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApplicationException;


class ApiException extends ApplicationException
{
    /**
     * List of errors.
     * @var \AdWords\cm\v201109\ApiError
     */
    public $errors;
}