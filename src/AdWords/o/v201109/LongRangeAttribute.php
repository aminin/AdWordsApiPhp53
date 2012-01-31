<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class LongRangeAttribute extends Attribute
{
    /**
     * {@link Range} of {@link LongValue} values contained by this
     * {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\Range
     */
    public $value;
}