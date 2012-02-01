<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


abstract class RichMediaAd extends Ad
{
    /**
     * Name of the rich media ad.
     * This field can be selected using the value &quot;RichMediaAdName&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $name;
    /**
     * Dimensions (height and width) of the ad.
     * It&#039;s required for standard third party ads.
     * @var \AdWords\cm\v201109\Dimensions
     */
    public $dimensions;
    /**
     * Snippet for this ad.
     * It&#039;s required for standard third party ads.
     * This field can be selected using the value &quot;RichMediaAdSnippet&quot;.
     * @var string
     */
    public $snippet;
    /**
     * Impression beacon URL for the ad.
     * This field can be selected using the value &quot;RichMediaAdImpressionBeaconUrl&quot;.
     * @var string
     */
    public $impressionBeaconUrl;
    /**
     * Certified Vendor Format ID.
     * This field can be selected using the value &quot;RichMediaAdCertifiedVendorFormatId&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $certifiedVendorFormatId;
}