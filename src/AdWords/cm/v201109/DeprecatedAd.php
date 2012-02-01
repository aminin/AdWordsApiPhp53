<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class DeprecatedAd extends Ad
{
    /**
     * Name of the ad.
     * This field can be selected using the value &quot;Name&quot;.
     * @var string
     */
    public $name;
    /**
     * Type of the creative.
     * This field can be selected using the value &quot;Type&quot;.
     * @var \AdWords\cm\v201109\DeprecatedAdType
     */
    public $type;
}