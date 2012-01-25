<?php

namespace AdWords\cm\v201109;



class RejectedErrorReason
{
    /**
     * Unknown value encountered
     */
    const CHOICE_UNKNOWN_VALUE = 'UNKNOWN_VALUE';

    private $_validValues = array(
        'UNKNOWN_VALUE',
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