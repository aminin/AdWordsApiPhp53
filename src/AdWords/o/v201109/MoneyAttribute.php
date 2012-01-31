<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class MoneyAttribute extends Attribute
{
    /**
     * {@link Money} value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Money
     */
    public $value;
}