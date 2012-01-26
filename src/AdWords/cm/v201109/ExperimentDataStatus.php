<?php

namespace AdWords\cm\v201109;



class ExperimentDataStatus
{
    /**
     * The experimental changes to the entity are active.
     */
    const CHOICE_ACTIVE = 'ACTIVE';
    /**
     * The experimental changes to the entity are no longer active.
     */
    const CHOICE_DELETED = 'DELETED';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'ACTIVE',
        'DELETED',
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