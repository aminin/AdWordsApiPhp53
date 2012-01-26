<?php

namespace AdWords\cm\v201109;



class PredicateOperator
{
    const CHOICE_EQUALS = 'EQUALS';
    const CHOICE_NOT_EQUALS = 'NOT_EQUALS';
    const CHOICE_IN = 'IN';
    const CHOICE_NOT_IN = 'NOT_IN';
    const CHOICE_GREATER_THAN = 'GREATER_THAN';
    const CHOICE_GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
    const CHOICE_LESS_THAN = 'LESS_THAN';
    const CHOICE_LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
    const CHOICE_STARTS_WITH = 'STARTS_WITH';
    const CHOICE_STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';
    const CHOICE_CONTAINS = 'CONTAINS';
    const CHOICE_CONTAINS_IGNORE_CASE = 'CONTAINS_IGNORE_CASE';
    const CHOICE_DOES_NOT_CONTAIN = 'DOES_NOT_CONTAIN';
    const CHOICE_DOES_NOT_CONTAIN_IGNORE_CASE = 'DOES_NOT_CONTAIN_IGNORE_CASE';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'EQUALS',
        'NOT_EQUALS',
        'IN',
        'NOT_IN',
        'GREATER_THAN',
        'GREATER_THAN_EQUALS',
        'LESS_THAN',
        'LESS_THAN_EQUALS',
        'STARTS_WITH',
        'STARTS_WITH_IGNORE_CASE',
        'CONTAINS',
        'CONTAINS_IGNORE_CASE',
        'DOES_NOT_CONTAIN',
        'DOES_NOT_CONTAIN_IGNORE_CASE',
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