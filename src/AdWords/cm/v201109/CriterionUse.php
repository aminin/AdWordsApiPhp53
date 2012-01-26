<?php

namespace AdWords\cm\v201109;



class CriterionUse
{
    /**
     * Biddable (positive) criterion
     */
    const CHOICE_BIDDABLE = 'BIDDABLE';
    /**
     * Negative criterion
     */
    const CHOICE_NEGATIVE = 'NEGATIVE';

    private $_validValues = array(
        'BIDDABLE',
        'NEGATIVE',
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