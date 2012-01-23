<?php

namespace AdWords\cm\v201109;



class DatabaseErrorReason
{
    const CHOICE_CONCURRENT_MODIFICATION = 'CONCURRENT_MODIFICATION';
    const CHOICE_PERMISSION_DENIED = 'PERMISSION_DENIED';
    const CHOICE_CAMPAIGN_PRODUCT_NOT_SUPPORTED = 'CAMPAIGN_PRODUCT_NOT_SUPPORTED';
    const CHOICE_DUPLICATE_KEY = 'DUPLICATE_KEY';
    const CHOICE_DATABASE_ERROR = 'DATABASE_ERROR';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CONCURRENT_MODIFICATION',
        'PERMISSION_DENIED',
        'CAMPAIGN_PRODUCT_NOT_SUPPORTED',
        'DUPLICATE_KEY',
        'DATABASE_ERROR',
        'UNKNOWN',
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