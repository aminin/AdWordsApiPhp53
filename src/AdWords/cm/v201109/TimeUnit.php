<?php

namespace AdWords\cm\v201109;



class TimeUnit
{
    const CHOICE_MINUTE = 'MINUTE';
    const CHOICE_HOUR = 'HOUR';
    const CHOICE_DAY = 'DAY';
    const CHOICE_WEEK = 'WEEK';
    const CHOICE_MONTH = 'MONTH';
    const CHOICE_LIFETIME = 'LIFETIME';

    private $_validValues = array(
        'MINUTE',
        'HOUR',
        'DAY',
        'WEEK',
        'MONTH',
        'LIFETIME',
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