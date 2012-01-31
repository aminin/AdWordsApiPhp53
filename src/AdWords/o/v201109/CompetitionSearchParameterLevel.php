<?php

namespace AdWords\o\v201109;



class CompetitionSearchParameterLevel
{
    /**
     * Low - competition rate [0.0000, 0.3333]
     */
    const CHOICE_LOW = 'LOW';
    /**
     * Medium - competition rate (0.3333, 0.6667]
     */
    const CHOICE_MEDIUM = 'MEDIUM';
    /**
     * High - competition rate (0.6667, 1.0000]
     */
    const CHOICE_HIGH = 'HIGH';

    private $_validValues = array(
        'LOW',
        'MEDIUM',
        'HIGH',
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