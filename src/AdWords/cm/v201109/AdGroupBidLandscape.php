<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BidLandscape;


class AdGroupBidLandscape extends BidLandscape
{
    /**
     * This field can be selected using the value &quot;LandscapeType&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\AdGroupBidLandscapeType
     */
    public $type;
    /**
     * This field can be selected using the value &quot;LandscapeCurrent&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $landscapeCurrent;
}