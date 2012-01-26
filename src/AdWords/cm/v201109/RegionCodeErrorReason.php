<?php

namespace AdWords\cm\v201109;



class RegionCodeErrorReason
{
    const CHOICE_INVALID_REGION_CODE = 'INVALID_REGION_CODE';

    private $_validValues = array(
        'INVALID_REGION_CODE',
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