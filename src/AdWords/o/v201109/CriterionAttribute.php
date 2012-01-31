<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class CriterionAttribute extends Attribute
{
    /**
     * Criterion value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Criterion
     */
    public $value;
}