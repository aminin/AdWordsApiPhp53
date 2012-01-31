<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class IntegerSetAttribute extends Attribute
{
    /**
     * Set of integer values contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $value;
}