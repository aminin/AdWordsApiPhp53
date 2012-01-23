<?php

namespace AdWords\mcm\v201109;



class CreateAccountErrorReason
{
    const CHOICE_INVALID_TIMEZONE = 'INVALID_TIMEZONE';
    const CHOICE_INVALID_CURRENCY = 'INVALID_CURRENCY';
    const CHOICE_INVALID_DESCRIPTIVE_NAME = 'INVALID_DESCRIPTIVE_NAME';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'INVALID_TIMEZONE',
        'INVALID_CURRENCY',
        'INVALID_DESCRIPTIVE_NAME',
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