<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class BooleanAttribute extends Attribute
{
    /**
     * Boolean value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $value;
}