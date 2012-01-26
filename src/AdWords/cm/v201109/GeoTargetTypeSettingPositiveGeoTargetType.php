<?php

namespace AdWords\cm\v201109;



class GeoTargetTypeSettingPositiveGeoTargetType
{
    /**
     * Specifies that either AOI or LOP may trigger the ad.
     */
    const CHOICE_DONT_CARE = 'DONT_CARE';
    /**
     * Specifies that the ad is triggered only if the user&#039;s AOI matches.
     */
    const CHOICE_AREA_OF_INTEREST = 'AREA_OF_INTEREST';
    /**
     * Specifies that the ad is triggered only if the user&#039;s LOP matches.
     */
    const CHOICE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';

    private $_validValues = array(
        'DONT_CARE',
        'AREA_OF_INTEREST',
        'LOCATION_OF_PRESENCE',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}