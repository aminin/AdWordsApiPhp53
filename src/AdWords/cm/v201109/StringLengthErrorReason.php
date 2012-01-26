<?php

namespace AdWords\cm\v201109;



class StringLengthErrorReason
{
    const CHOICE_TOO_SHORT = 'TOO_SHORT';
    const CHOICE_TOO_LONG = 'TOO_LONG';

    private $_validValues = array(
        'TOO_SHORT',
        'TOO_LONG',
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