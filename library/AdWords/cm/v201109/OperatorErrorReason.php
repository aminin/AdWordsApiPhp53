<?php

namespace AdWords\cm\v201109;



class OperatorErrorReason
{
    const CHOICE_OPERATOR_NOT_SUPPORTED = 'OPERATOR_NOT_SUPPORTED';

    private $_validValues = array(
        'OPERATOR_NOT_SUPPORTED',
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