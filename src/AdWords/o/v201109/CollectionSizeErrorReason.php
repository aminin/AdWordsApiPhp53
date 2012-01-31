<?php

namespace AdWords\o\v201109;



class CollectionSizeErrorReason
{
    const CHOICE_TOO_FEW = 'TOO_FEW';
    const CHOICE_TOO_MANY = 'TOO_MANY';

    private $_validValues = array(
        'TOO_FEW',
        'TOO_MANY',
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