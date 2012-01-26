<?php

namespace AdWords\cm\v201109;



class DatabaseErrorReason
{
    /**
     * A concurrency problem occurred as two threads were attempting to modify same object.
     */
    const CHOICE_CONCURRENT_MODIFICATION = 'CONCURRENT_MODIFICATION';
    /**
     * The permission was denied to access an object.
     */
    const CHOICE_PERMISSION_DENIED = 'PERMISSION_DENIED';
    /**
     * Requested campaign belongs to a product that is not supported by the api.
     */
    const CHOICE_CAMPAIGN_PRODUCT_NOT_SUPPORTED = 'CAMPAIGN_PRODUCT_NOT_SUPPORTED';
    /**
     * a duplicate key was detected upon insertion
     */
    const CHOICE_DUPLICATE_KEY = 'DUPLICATE_KEY';
    /**
     * a database error has occurred
     */
    const CHOICE_DATABASE_ERROR = 'DATABASE_ERROR';
    /**
     * an unknown error has occurred
     */
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