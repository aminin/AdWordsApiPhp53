<?php

namespace AdWords\o\v201109;



class DeviceType
{
    /**
     * Mobile WAP devices.
     */
    const CHOICE_MOBILE_WAP = 'MOBILE_WAP';
    /**
     * Mobile devices with full internet browsers.
     */
    const CHOICE_MOBILE_WITH_FULL_BROWSER = 'MOBILE_WITH_FULL_BROWSER';
    /**
     * Desktop and laptop computers.
     */
    const CHOICE_DESKTOPS_AND_LAPTOPS = 'DESKTOPS_AND_LAPTOPS';

    private $_validValues = array(
        'MOBILE_WAP',
        'MOBILE_WITH_FULL_BROWSER',
        'DESKTOPS_AND_LAPTOPS',
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