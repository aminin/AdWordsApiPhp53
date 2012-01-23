<?php

namespace AdWords\cm\v201109;



class QuotaCheckErrorReason
{
    /**
     * Customer passed in an invalid token in the header.
     */
    const CHOICE_INVALID_TOKEN_HEADER = 'INVALID_TOKEN_HEADER';
    /**
     * Customer is marked delinquent.
     */
    const CHOICE_ACCOUNT_DELINQUENT = 'ACCOUNT_DELINQUENT';
    /**
     * Customer is a fraudulent.
     */
    const CHOICE_ACCOUNT_INACCESSIBLE = 'ACCOUNT_INACCESSIBLE';
    /**
     * Inactive Account.
     */
    const CHOICE_ACCOUNT_INACTIVE = 'ACCOUNT_INACTIVE';
    /**
     * Signup not complete
     */
    const CHOICE_INCOMPLETE_SIGNUP = 'INCOMPLETE_SIGNUP';
    /**
     * Latest AdWords API T&amp;C not agreed.
     */
    const CHOICE_INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED = 'INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED';
    /**
     * No Billing Info.
     */
    const CHOICE_INCOMPLETE_SIGNUP_NO_BILLING_INFO = 'INCOMPLETE_SIGNUP_NO_BILLING_INFO';
    /**
     * User Info missing.
     */
    const CHOICE_INCOMPLETE_SIGNUP_USER_INFO_MISSING = 'INCOMPLETE_SIGNUP_USER_INFO_MISSING';
    /**
     * User Info pending.
     */
    const CHOICE_INCOMPLETE_SIGNUP_USER_INFO_PENDING = 'INCOMPLETE_SIGNUP_USER_INFO_PENDING';
    /**
     * User Info rejected.
     */
    const CHOICE_INCOMPLETE_SIGNUP_USER_INFO_REJECTED = 'INCOMPLETE_SIGNUP_USER_INFO_REJECTED';
    /**
     * Monthly budget quota reached.
     */
    const CHOICE_MONTHLY_BUDGET_REACHED = 'MONTHLY_BUDGET_REACHED';
    /**
     * Monthly budget quota exceeded.
     */
    const CHOICE_QUOTA_EXCEEDED = 'QUOTA_EXCEEDED';

    private $_validValues = array(
        'INVALID_TOKEN_HEADER',
        'ACCOUNT_DELINQUENT',
        'ACCOUNT_INACCESSIBLE',
        'ACCOUNT_INACTIVE',
        'INCOMPLETE_SIGNUP',
        'INCOMPLETE_SIGNUP_LATEST_ADWORDS_API_TNC_NOT_AGREED',
        'INCOMPLETE_SIGNUP_NO_BILLING_INFO',
        'INCOMPLETE_SIGNUP_USER_INFO_MISSING',
        'INCOMPLETE_SIGNUP_USER_INFO_PENDING',
        'INCOMPLETE_SIGNUP_USER_INFO_REJECTED',
        'MONTHLY_BUDGET_REACHED',
        'QUOTA_EXCEEDED',
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