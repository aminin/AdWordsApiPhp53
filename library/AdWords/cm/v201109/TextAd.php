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