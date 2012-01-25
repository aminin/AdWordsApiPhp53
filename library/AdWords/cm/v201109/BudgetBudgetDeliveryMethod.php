<?php

namespace AdWords\cm\v201109;



class BudgetBudgetDeliveryMethod
{
    /**
     * The budget server will throttle serving evenly across the entire time period.
     */
    const CHOICE_STANDARD = 'STANDARD';
    /**
     * The budget server will not throttle serving, and ads will serve as fast as possible.
     */
    const CHOICE_ACCELERATED = 'ACCELERATED';

    private $_validValues = array(
        'STANDARD',
        'ACCELERATED',
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