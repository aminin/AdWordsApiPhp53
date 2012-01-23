<?php

namespace AdWords\cm\v201109;



class RequestErrorReason
{
    const CHOICE_UNKNOWN = 'UNKNOWN';
    const CHOICE_INVALID_INPUT = 'INVALID_INPUT';

    private $_validValues = array(
        'UNKNOWN',
        'INVALID_INPUT',
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