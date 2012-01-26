<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Media;


class Video extends Media
{
    /**
     * The duration of the associated video, in milliseconds.
     * This field can be selected using the value &quot;DurationMillis&quot;.This field can be filtered on.
     * @var string
     */
    public $durationMillis;
    /**
     * Streaming url for the video.
     * This field can be selected using the value &quot;StreamingUrl&quot;.
     * @var string
     */
    public $streamingUrl;
    /**
     * Indicates whether the video is ready to play on the web
     * This field can be selected using the value &quot;ReadyToPlayOnTheWeb&quot;.
     * @var string
     */
    public $readyToPlayOnTheWeb;
    /**
     * The Industry Standard Commercial Identifier code for this media, used
     * mainly for television commercials.
     * This field can be selected using the value &quot;IndustryStandardCommercialIdentifier&quot;.This field can be filtered on.
     * @var string
     */
    public $industryStandardCommercialIdentifier;
    /**
     * The Advertising Digital Identification code for this media, as defined by
     * the American Association of Advertising Agencies, used mainly for
     * television commercials..
     * This field can be selected using the value &quot;AdvertisingId&quot;.This field can be filtered on.
     * @var string
     */
    public $advertisingId;
    /**
     * For YouTube-hosted videos, the YouTube video id (as seen in YT urls)
     * may also be filled in.
     * This field can be selected using the value &quot;YouTubeVideoIdString&quot;.This field can be filtered on.
     * @var string
     */
    public $youTubeVideoIdString;
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