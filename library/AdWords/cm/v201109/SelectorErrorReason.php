<?php

namespace AdWords\cm\v201109;



class SelectorErrorReason
{
    /**
     * The field name is not valid.
     */
    const CHOICE_INVALID_FIELD_NAME = 'INVALID_FIELD_NAME';
    /**
     * The list of fields is null or empty.
     */
    const CHOICE_MISSING_FIELDS = 'MISSING_FIELDS';
    /**
     * The list of predicates is null or empty.
     */
    const CHOICE_MISSING_PREDICATES = 'MISSING_PREDICATES';
    /**
     * Predicate operator does not support multiple values. Multiple values are
     * supported only for {@link Predicate.Operator#IN} and {@link Predicate.Operator#NOT_IN}.
     */
    const CHOICE_OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES = 'OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES';
    /**
     * The predicate enum value is not valid.
     */
    const CHOICE_INVALID_PREDICATE_ENUM_VALUE = 'INVALID_PREDICATE_ENUM_VALUE';
    /**
     * The predicate operator is empty.
     */
    const CHOICE_MISSING_PREDICATE_OPERATOR = 'MISSING_PREDICATE_OPERATOR';
    /**
     * The predicate values are empty.
     */
    const CHOICE_MISSING_PREDICATE_VALUES = 'MISSING_PREDICATE_VALUES';
    /**
     * The predicate field name is not valid.
     */
    const CHOICE_INVALID_PREDICATE_FIELD_NAME = 'INVALID_PREDICATE_FIELD_NAME';
    /**
     * The predicate operator is not valid.
     */
    const CHOICE_INVALID_PREDICATE_OPERATOR = 'INVALID_PREDICATE_OPERATOR';
    /**
     * Invalid selection of fields.
     */
    const CHOICE_INVALID_FIELD_SELECTION = 'INVALID_FIELD_SELECTION';
    /**
     * The predicate value is not valid.
     */
    const CHOICE_INVALID_PREDICATE_VALUE = 'INVALID_PREDICATE_VALUE';
    /**
     * The sort field name is not valid or the field is not sortable.
     */
    const CHOICE_INVALID_SORT_FIELD_NAME = 'INVALID_SORT_FIELD_NAME';
    /**
     * Standard error.
     */
    const CHOICE_SELECTOR_ERROR = 'SELECTOR_ERROR';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN_ERROR = 'UNKNOWN_ERROR';

    private $_validValues = array(
        'INVALID_FIELD_NAME',
        'MISSING_FIELDS',
        'MISSING_PREDICATES',
        'OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES',
        'INVALID_PREDICATE_ENUM_VALUE',
        'MISSING_PREDICATE_OPERATOR',
        'MISSING_PREDICATE_VALUES',
        'INVALID_PREDICATE_FIELD_NAME',
        'INVALID_PREDICATE_OPERATOR',
        'INVALID_FIELD_SELECTION',
        'INVALID_PREDICATE_VALUE',
        'INVALID_SORT_FIELD_NAME',
        'SELECTOR_ERROR',
        'UNKNOWN_ERROR',
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