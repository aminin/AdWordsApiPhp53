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
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}