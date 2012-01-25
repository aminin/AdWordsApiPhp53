<?php

namespace AdWords\cm\v201109;



class MultiplierSource
{
    /**
     * AdGroup level multiplier
     */
    const CHOICE_ADGROUP = 'ADGROUP';
    /**
     * Criterion level multiplier
     */
    const CHOICE_CRITERION = 'CRITERION';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'ADGROUP',
        'CRITERION',
        'UNKNOWN',
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