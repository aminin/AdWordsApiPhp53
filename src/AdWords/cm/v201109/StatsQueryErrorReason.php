<?php

namespace AdWords\cm\v201109;



class StatsQueryErrorReason
{
    /**
     * Date is outside of allowed range.
     */
    const CHOICE_DATE_NOT_IN_VALID_RANGE = 'DATE_NOT_IN_VALID_RANGE';

    private $_validValues = array(
        'DATE_NOT_IN_VALID_RANGE',
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