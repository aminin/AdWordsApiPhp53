<?php

namespace AdWords\cm\v201109;



class ClientTermsErrorReason
{
    /**
     * Customer has not agreed to the latest AdWords Terms &amp; Conditions
     */
    const CHOICE_INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED = 'INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED';

    private $_validValues = array(
        'INCOMPLETE_SIGNUP_CURRENT_ADWORDS_TNC_NOT_AGREED',
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