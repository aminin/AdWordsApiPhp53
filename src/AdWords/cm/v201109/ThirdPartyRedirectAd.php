<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\RichMediaAd;


class ThirdPartyRedirectAd extends RichMediaAd
{
    /**
     * Defines whether or not the ad is cookie targeted.
     * (i.e. user list targeting, or the network&#039;s equivalent).
     * This field can be selected using the value &quot;IsCookieTargeted&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $isCookieTargeted;
    /**
     * Defines whether or not the ad is targeting user interest.
     * This field can be selected using the value &quot;IsUserInterestTargeted&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $isUserInterestTargeted;
    /**
     * Defines whether or not the ad contains a tracking pixel of any kind.
     * This field can be selected using the value &quot;IsTagged&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $isTagged;
    /**
     * Video Types of the ad. (RealMedia, Quick Time etc.)
     * This field can be selected using the value &quot;VideoTypes&quot;.
     * @var \AdWords\cm\v201109\VideoType
     */
    public $videoTypes;
}