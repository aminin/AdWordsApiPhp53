<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Media;


class Audio extends Media
{
    /**
     * The duration of the associated audio, in milliseconds.
     * This field can be selected using the value &quot;DurationMillis&quot;.This field can be filtered on.
     * @var string
     */
    public $durationMillis;
    /**
     * The streaming url of the audio.
     * This field can be selected using the value &quot;StreamingUrl&quot;.
     * @var string
     */
    public $streamingUrl;
    /**
     * Indicates whether the audio is ready to play on the web.
     * This field can be selected using the value &quot;ReadyToPlayOnTheWeb&quot;.
     * @var string
     */
    public $readyToPlayOnTheWeb;
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