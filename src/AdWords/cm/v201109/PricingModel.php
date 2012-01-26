<?php

namespace AdWords\cm\v201109;



class PricingModel
{
    const CHOICE_CLICKS = 'CLICKS';
    const CHOICE_IMPRESSIONS = 'IMPRESSIONS';
    const CHOICE_CONVERSIONS = 'CONVERSIONS';

    private $_validValues = array(
        'CLICKS',
        'IMPRESSIONS',
        'CONVERSIONS',
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