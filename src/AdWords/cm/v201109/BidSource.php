<?php

namespace AdWords\cm\v201109;



class BidSource
{
    /**
     * Effective Bid is Adgroup level bid
     */
    const CHOICE_ADGROUP = 'ADGROUP';
    /**
     * Effective Bid is Keyword level bid
     */
    const CHOICE_CRITERION = 'CRITERION';

    private $_validValues = array(
        'ADGROUP',
        'CRITERION',
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