<?php

namespace AdWords\cm\v201109;



class GeoTargetTypeSettingNegativeGeoTargetType
{
    /**
     * Specifies that a user is excluded from seeing the ad
     * if either their AOI or their LOP matches the geo target.
     */
    const CHOICE_DONT_CARE = 'DONT_CARE';
    /**
     * Specifies that a user is excluded from seeing the ad
     * only if their LOP matches the geo target.
     */
    const CHOICE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';

    private $_validValues = array(
        'DONT_CARE',
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