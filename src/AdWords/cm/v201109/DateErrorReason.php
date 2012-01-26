<?php

namespace AdWords\cm\v201109;



class DateErrorReason
{
    /**
     * Given field values do not correspond to a valid date.
     */
    const CHOICE_INVALID_FIELD_VALUES_IN_DATE = 'INVALID_FIELD_VALUES_IN_DATE';
    /**
     * The string date&#039;s format should be yyyymmdd.
     */
    const CHOICE_INVALID_STRING_DATE = 'INVALID_STRING_DATE';
    /**
     * The string date range&#039;s format should be yyyymmdd yyyymmdd.
     */
    const CHOICE_INVALID_STRING_DATE_RANGE = 'INVALID_STRING_DATE_RANGE';
    /**
     * The string date time&#039;s format should be yyyymmdd hhmmss [tz].
     */
    const CHOICE_INVALID_STRING_DATE_TIME = 'INVALID_STRING_DATE_TIME';
    /**
     * Date is before allowed minimum.
     */
    const CHOICE_EARLIER_THAN_MINIMUM_DATE = 'EARLIER_THAN_MINIMUM_DATE';
    /**
     * Date is after allowed maximum.
     */
    const CHOICE_LATER_THAN_MAXIMUM_DATE = 'LATER_THAN_MAXIMUM_DATE';
    /**
     * Date range bounds are not in order.
     */
    const CHOICE_DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE = 'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE';
    /**
     * Both dates in range are null.
     */
    const CHOICE_DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL = 'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL';

    private $_validValues = array(
        'INVALID_FIELD_VALUES_IN_DATE',
        'INVALID_STRING_DATE',
        'INVALID_STRING_DATE_RANGE',
        'INVALID_STRING_DATE_TIME',
        'EARLIER_THAN_MINIMUM_DATE',
        'LATER_THAN_MAXIMUM_DATE',
        'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE',
        'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL',
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