<?php

namespace AdWords\cm\v201109;



class LocationCriterionServiceErrorReason
{
    const CHOICE_REQUIRED_LOCATION_CRITERION_PREDICATE_MISSING = 'REQUIRED_LOCATION_CRITERION_PREDICATE_MISSING';
    const CHOICE_TOO_MANY_LOCATION_CRITERION_PREDICATES_SPECIFIED = 'TOO_MANY_LOCATION_CRITERION_PREDICATES_SPECIFIED';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_LOCATION_CRITERION_SERVICE_ERROR = 'LOCATION_CRITERION_SERVICE_ERROR';

    private $_validValues = array(
        'REQUIRED_LOCATION_CRITERION_PREDICATE_MISSING',
        'TOO_MANY_LOCATION_CRITERION_PREDICATES_SPECIFIED',
        'LOCATION_CRITERION_SERVICE_ERROR',
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