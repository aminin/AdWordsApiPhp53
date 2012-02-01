<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class AdGroupOperation extends Operation
{
    /**
     * AdGroup to operate on
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\AdGroup
     */
    public $operand;
}