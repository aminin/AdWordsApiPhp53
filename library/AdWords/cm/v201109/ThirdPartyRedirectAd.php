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