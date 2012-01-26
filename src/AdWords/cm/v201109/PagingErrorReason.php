<?php

namespace AdWords\cm\v201109;



class PagingErrorReason
{
    const CHOICE_START_INDEX_CANNOT_BE_NEGATIVE = 'START_INDEX_CANNOT_BE_NEGATIVE';
    const CHOICE_NUMBER_OF_RESULTS_CANNOT_BE_NEGATIVE = 'NUMBER_OF_RESULTS_CANNOT_BE_NEGATIVE';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'START_INDEX_CANNOT_BE_NEGATIVE',
        'NUMBER_OF_RESULTS_CANNOT_BE_NEGATIVE',
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