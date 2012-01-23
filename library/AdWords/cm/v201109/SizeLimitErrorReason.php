<?php

namespace AdWords\cm\v201109;



class SizeLimitErrorReason
{
    /**
     * The number of entries in the request exceeds the system limit.
     */
    const CHOICE_REQUEST_SIZE_LIMIT_EXCEEDED = 'REQUEST_SIZE_LIMIT_EXCEEDED';
    /**
     * The number of entries in the response exceeds the system limit.
     */
    const CHOICE_RESPONSE_SIZE_LIMIT_EXCEEDED = 'RESPONSE_SIZE_LIMIT_EXCEEDED';
    /**
     * &lt;span class=&quot;constraint Rejected&quot;&gt;Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.&lt;/span&gt;
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'REQUEST_SIZE_LIMIT_EXCEEDED',
        'RESPONSE_SIZE_LIMIT_EXCEEDED',
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