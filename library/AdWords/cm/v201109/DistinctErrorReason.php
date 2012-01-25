<?php

namespace AdWords\cm\v201109;



class DistinctErrorReason
{
    const CHOICE_DUPLICATE_ELEMENT = 'DUPLICATE_ELEMENT';
    const CHOICE_DUPLICATE_TYPE = 'DUPLICATE_TYPE';

    private $_validValues = array(
        'DUPLICATE_ELEMENT',
        'DUPLICATE_TYPE',
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