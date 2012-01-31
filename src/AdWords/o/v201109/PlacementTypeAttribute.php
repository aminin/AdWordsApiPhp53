<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class PlacementTypeAttribute extends Attribute
{
    /**
     * {@link PlacementType} value contained by this {@link Attribute}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\SiteConstantsPlacementType
     */
    public $value;
}