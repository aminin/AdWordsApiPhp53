<?php

namespace AdWords\cm\v201109;



class ConversionDeduplicationMode
{
    const CHOICE_ONE_PER_CLICK = 'ONE_PER_CLICK';
    /**
     * Total number of conversions per click.
     */
    const CHOICE_MANY_PER_CLICK = 'MANY_PER_CLICK';

    private $_validValues = array(
        'ONE_PER_CLICK',
        'MANY_PER_CLICK',
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