<?php

namespace AdWords\cm\v201109;



class AuthorizationErrorReason
{
    const CHOICE_UNABLE_TO_AUTHORIZE = 'UNABLE_TO_AUTHORIZE';
    const CHOICE_NO_ADWORDS_ACCOUNT_FOR_CUSTOMER = 'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER';
    const CHOICE_USER_PERMISSION_DENIED = 'USER_PERMISSION_DENIED';
    const CHOICE_EFFECTIVE_USER_PERMISSION_DENIED = 'EFFECTIVE_USER_PERMISSION_DENIED';
    const CHOICE_USER_HAS_READONLY_PERMISSION = 'USER_HAS_READONLY_PERMISSION';
    const CHOICE_NO_CUSTOMER_FOUND = 'NO_CUSTOMER_FOUND';

    private $_validValues = array(
        'UNABLE_TO_AUTHORIZE',
        'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER',
        'USER_PERMISSION_DENIED',
        'EFFECTIVE_USER_PERMISSION_DENIED',
        'USER_HAS_READONLY_PERMISSION',
        'NO_CUSTOMER_FOUND',
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