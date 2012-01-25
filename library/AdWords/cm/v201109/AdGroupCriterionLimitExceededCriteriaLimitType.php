<?php

namespace AdWords\cm\v201109;



class AdGroupCriterionLimitExceededCriteriaLimitType
{
    const CHOICE_ADGROUP_KEYWORD = 'ADGROUP_KEYWORD';
    const CHOICE_ADGROUP_WEBSITE = 'ADGROUP_WEBSITE';

    private $_validValues = array(
        'ADGROUP_KEYWORD',
        'ADGROUP_WEBSITE',
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