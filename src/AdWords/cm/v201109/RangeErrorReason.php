<?php

namespace AdWords\cm\v201109;



class RangeErrorReason
{
    const CHOICE_TOO_LOW = 'TOO_LOW';
    const CHOICE_TOO_HIGH = 'TOO_HIGH';

    private $_validValues = array(
        'TOO_LOW',
        'TOO_HIGH',
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