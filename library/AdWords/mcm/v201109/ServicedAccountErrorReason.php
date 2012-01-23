<?php

namespace AdWords\mcm\v201109;



class ServicedAccountErrorReason
{
    /**
     * Improper IDs were specified in the request
     */
    const CHOICE_BAD_IDS = 'BAD_IDS';
    /**
     * The user is not allowed to query one or more of the specified accounts
     */
    const CHOICE_NOT_AUTHORIZED = 'NOT_AUTHORIZED';
    /**
     * The customer has reached quota limit.
     */
    const CHOICE_REQUESTS_TOO_FREQUENT = 'REQUESTS_TOO_FREQUENT';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'BAD_IDS',
        'NOT_AUTHORIZED',
        'REQUESTS_TOO_FREQUENT',
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