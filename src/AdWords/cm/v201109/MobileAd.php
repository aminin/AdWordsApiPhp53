<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class MobileAd extends Ad
{
    /**
     * The headline of the ad
     * This field can be selected using the value &quot;MobileAdHeadline&quot;.
     * @var string
     */
    public $headline;
    /**
     * The description line
     * This field can be selected using the value &quot;MobileAdDescription&quot;.
     * @var string
     */
    public $description;
    /**
     * The list of markup languages to use for the mobile ad.
     * This field can be selected using the value &quot;MobileAdMarkupLanguages&quot;.
     * @var \AdWords\cm\v201109\MarkupLanguageType
     */
    public $markupLanguages;
    /**
     * The list of mobile carriers to use for the mobile ad.  Each string
     * must be of the form &#039;CarrierName@CountryCode&#039;. To specify that
     * all available carriers are to be used, use the reserved keyword
     * &#039;ALLCARRIERS&#039;. See available
     * mobile carriers.
     * This field can be selected using the value &quot;MobileAdMobileCarriers&quot;.
     * @var string
     */
    public $mobileCarriers;
    /**
     * The business name of the mobile ad.
     * Must not exceed 20 characters (except for ads targeted
     * to Japan, which must not exceed 10 Japanese characters).
     * This field can be selected using the value &quot;MobileAdBusinessName&quot;.
     * @var string
     */
    public $businessName;
    /**
     * The country code for the phone number in the click-to-call mobile ad.
     * The click-to-call ad will display only in this country.
     * This field will be used to verify the phone number
     * format and validate the targeted mobile carriers.
     * This field can be selected using the value &quot;MobileAdCountryCode&quot;.
     * @var string
     */
    public $countryCode;
    /**
     * The click-to-call phone number.
     * Must not exceed 20 characters.
     * This field can be selected using the value &quot;MobileAdPhoneNumber&quot;.
     * @var string
     */
    public $phoneNumber;
}