<?php

namespace AdWords\cm\v201109;



class ConversionOptimizerBidType
{
    /**
     * Average cost-per-acquisition (targetCPA) bid type.
     */
    const CHOICE_TARGET_CPA = 'TARGET_CPA';
    /**
     * Max CPA bid type.
     */
    const CHOICE_MAX_CPA = 'MAX_CPA';

    private $_validValues = array(
        'TARGET_CPA',
        'MAX_CPA',
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