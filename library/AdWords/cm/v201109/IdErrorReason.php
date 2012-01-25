<?php

namespace AdWords\cm\v201109;



class IdErrorReason
{
    /**
     * Id not found
     */
    const CHOICE_NOT_FOUND = 'NOT_FOUND';

    private $_validValues = array(
        'NOT_FOUND',
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