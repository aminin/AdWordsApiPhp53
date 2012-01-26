<?php

namespace AdWords\cm\v201109;



class AgeRangeAgeRangeType
{
    const CHOICE_AGE_RANGE_18_24 = 'AGE_RANGE_18_24';
    const CHOICE_AGE_RANGE_25_34 = 'AGE_RANGE_25_34';
    const CHOICE_AGE_RANGE_35_44 = 'AGE_RANGE_35_44';
    const CHOICE_AGE_RANGE_45_54 = 'AGE_RANGE_45_54';
    const CHOICE_AGE_RANGE_55_64 = 'AGE_RANGE_55_64';
    const CHOICE_AGE_RANGE_65_UP = 'AGE_RANGE_65_UP';
    const CHOICE_AGE_RANGE_UNDETERMINED = 'AGE_RANGE_UNDETERMINED';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'AGE_RANGE_18_24',
        'AGE_RANGE_25_34',
        'AGE_RANGE_35_44',
        'AGE_RANGE_45_54',
        'AGE_RANGE_55_64',
        'AGE_RANGE_65_UP',
        'AGE_RANGE_UNDETERMINED',
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