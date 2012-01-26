<?php

namespace AdWords\cm\v201109;



class ExperimentDeltaStatus
{
    /**
     * The entity is added only to the Experiment split.
     */
    const CHOICE_EXPERIMENT_ONLY = 'EXPERIMENT_ONLY';
    /**
     * The entity is present in the Control split and is modified in the Experiment split.
     */
    const CHOICE_MODIFIED = 'MODIFIED';
    /**
     * The entity is present only in the Control split - it is suppressed from the Experiment split.
     */
    const CHOICE_CONTROL_ONLY = 'CONTROL_ONLY';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'EXPERIMENT_ONLY',
        'MODIFIED',
        'CONTROL_ONLY',
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