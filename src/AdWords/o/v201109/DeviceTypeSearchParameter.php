<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class DeviceTypeSearchParameter extends SearchParameter
{
    /**
     * The requested device type for ideas and stats.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\DeviceType
     */
    public $deviceType;
}