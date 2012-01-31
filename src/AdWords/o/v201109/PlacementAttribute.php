<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class PlacementAttribute extends Attribute
{
    /**
     * {@link Placement} value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Placement
     */
    public $value;
}