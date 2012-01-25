<?php

namespace AdWords\cm\v201109;



class BudgetBudgetPeriod
{
    const CHOICE_DAILY = 'DAILY';
    /**
     * Not supported. Please use {@code DAILY}.
     */
    const CHOICE_MONTHLY = 'MONTHLY';

    private $_validValues = array(
        'DAILY',
        'MONTHLY',
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