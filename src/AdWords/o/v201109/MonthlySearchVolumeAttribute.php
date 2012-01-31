<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Attribute;


class MonthlySearchVolumeAttribute extends Attribute
{
    /**
     * List of {@link MonthlySearchVolume} values contained by this
     * {@link Attribute}. The list contains the data for the past 12 months
     * (excluding the current month) in sorted order started with the most recent
     * month.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\MonthlySearchVolume
     */
    public $value;
}