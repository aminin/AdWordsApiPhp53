<?php

namespace AdWords\cm\v201109;



class NotWhitelistedErrorReason
{
    const CHOICE_CUSTOMER_NOT_WHITELISTED_FOR_API = 'CUSTOMER_NOT_WHITELISTED_FOR_API';

    private $_validValues = array(
        'CUSTOMER_NOT_WHITELISTED_FOR_API',
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