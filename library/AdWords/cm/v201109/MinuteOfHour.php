<?php

namespace AdWords\cm\v201109;



class MinuteOfHour
{
    /**
     * Zero minutes past hour.
     */
    const CHOICE_ZERO = 'ZERO';
    /**
     * Fifteen minutes past hour.
     */
    const CHOICE_FIFTEEN = 'FIFTEEN';
    /**
     * Thirty minutes past hour.
     */
    const CHOICE_THIRTY = 'THIRTY';
    /**
     * Forty-five minutes past hour.
     */
    const CHOICE_FORTY_FIVE = 'FORTY_FIVE';

    private $_validValues = array(
        'ZERO',
        'FIFTEEN',
        'THIRTY',
        'FORTY_FIVE',
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