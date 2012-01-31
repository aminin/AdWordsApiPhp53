<?php

namespace AdWords\o\v201109;



class CurrencyCodeErrorReason
{
    const CHOICE_UNSUPPORTED_CURRENCY_CODE = 'UNSUPPORTED_CURRENCY_CODE';

    private $_validValues = array(
        'UNSUPPORTED_CURRENCY_CODE',
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