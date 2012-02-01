<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class MobileImageAd extends Ad
{
    /**
     * The list of markup languages to use for the mobile ad.
     * This field can be selected using the value &quot;MobileImageAdMarkupLanguages&quot;.
     * @var \AdWords\cm\v201109\MarkupLanguageType
     */
    public $markupLanguages;
    /**
     * The list of mobile carriers to use for the mobile ad.  Each string
     * must be of the form &#039;CarrierName@CountryCode&#039;. To specify that
     * all available carriers are to be used, use the reserved keyword
     * &#039;ALLCARRIERS&#039;. See available
     * mobile carriers.
     * This field can be selected using the value &quot;MobileImageAdMobileCarriers&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $mobileCarriers;
    /**
     * Image to be used in the mobile image ad.
     * @var \AdWords\cm\v201109\Image
     */
    public $image;
}