<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class TextAd extends Ad
{
    /**
     * The headline of the ad
     * This field can be selected using the value &quot;Headline&quot;.This field can be filtered on.
     * @var string
     */
    public $headline;
    /**
     * The first description line
     * This field can be selected using the value &quot;Description1&quot;.This field can be filtered on.
     * @var string
     */
    public $description1;
    /**
     * The second description line
     * This field can be selected using the value &quot;Description2&quot;.This field can be filtered on.
     * @var string
     */
    public $description2;
}