<?php

namespace AdWords\cm\v201109;



class NotEmptyErrorReason
{
    const CHOICE_EMPTY_LIST = 'EMPTY_LIST';

    private $_validValues = array(
        'EMPTY_LIST',
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