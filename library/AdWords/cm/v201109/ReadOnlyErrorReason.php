<?php

namespace AdWords\cm\v201109;



class ReadOnlyErrorReason
{
    const CHOICE_READ_ONLY = 'READ_ONLY';

    private $_validValues = array(
        'READ_ONLY',
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