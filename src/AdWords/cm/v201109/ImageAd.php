<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class ImageAd extends Ad
{
    /**
     * The image data for the ad
     * @var \AdWords\cm\v201109\Image
     */
    public $image;
    /**
     * The name label for this ad
     * This field can be selected using the value &quot;ImageCreativeName&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $name;
    /**
     * For ADD operations only: use this field to specify an existing
     * image ad to copy the image from, in which case the &quot;image&quot; field
     * can be left empty. This is the preferred way of copying images
     * over re-uploading the same image.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $adToCopyImageFrom;
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