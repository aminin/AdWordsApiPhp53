<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ComparableValue;


class Money extends ComparableValue
{
    /**
     * Amount in micros. One million is equivalent to one unit.
     * @var string
     */
    public $microAmount;
}