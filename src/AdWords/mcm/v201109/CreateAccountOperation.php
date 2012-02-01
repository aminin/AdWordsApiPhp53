<?php

namespace AdWords\mcm\v201109;

use AdWords\cm\v201109\Operation;


class CreateAccountOperation extends Operation
{
    /**
     * @var \AdWords\mcm\v201109\Account
     */
    public $operand;
    /**
     * This field is required and should not be {@code null}.
     * The length of this string should be between 1 and 255, inclusive, (trimmed).
     * @var string
     */
    public $descriptiveName;
}