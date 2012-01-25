<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Setting;


class GeoTargetTypeSetting extends Setting
{
    /**
     * The setting used for positive geotargeting in this particular campaign.
     * 
     * Again, the campaign can be positively targeted using solely LOP, solely
     * AOI, or either. Positive targeting triggers ads only for users
     * whose location is related to the given locations.
     * 
     * The default value is DONT_CARE.
     * @var \AdWords\cm\v201109\GeoTargetTypeSettingPositiveGeoTargetType
     */
    public $positiveGeoTargetType;
    /**
     * The setting used for negative geotargeting in this particular campaign.
     * 
     * Again, the campaign can be negatively targeted using solely LOP or
     * both AOI and LOP. Negative targeting triggers ads for all users
     * except those whose location is related to the given locations.
     * 
     * The default value is LOP.
     * @var \AdWords\cm\v201109\GeoTargetTypeSettingNegativeGeoTargetType
     */
    public $negativeGeoTargetType;
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