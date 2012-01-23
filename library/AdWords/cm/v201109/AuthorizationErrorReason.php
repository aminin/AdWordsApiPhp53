<?php

namespace AdWords\cm\v201109;



class AuthorizationErrorReason
{
    /**
     * Could not complete authorization due to an internal problem.
     */
    const CHOICE_UNABLE_TO_AUTHORIZE = 'UNABLE_TO_AUTHORIZE';
    /**
     * Customer has no AdWords account.
     */
    const CHOICE_NO_ADWORDS_ACCOUNT_FOR_CUSTOMER = 'NO_ADWORDS_ACCOUNT_FOR_CUSTOMER';
    /**
     * User doesn&#039;t have permission to access customer.
     */
    const CHOICE_USER_PERMISSION_DENIED = 'USER_PERMISSION_DENIED';
    /**
     * Effective user doesn&#039;t have permission to access this customer.
     */
    const CHOICE_EFFECTIVE_USER_PERMISSION_DENIED = 'EFFECTIVE_USER_PERMISSION_DENIED';
    /**
     * User has read-only permission cannot mutate.
     */
    const CHOICE_USER_HAS_READONLY_PERMISSION = 'USER_HAS_READONLY_PERMISSION';
    /**
     * No customer found.
     */
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