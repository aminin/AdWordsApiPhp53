<?php

namespace AdWords\cm\v201109;



class ProximityDistanceUnits
{
    /**
     * The unit of distance is kilometer.
     */
    const CHOICE_KILOMETERS = 'KILOMETERS';
    /**
     * The unit of distance is mile.
     */
    const CHOICE_MILES = 'MILES';

    private $_validValues = array(
        'KILOMETERS',
        'MILES',
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