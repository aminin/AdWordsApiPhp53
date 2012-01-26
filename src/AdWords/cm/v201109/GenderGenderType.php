<?php

namespace AdWords\cm\v201109;



class GenderGenderType
{
    const CHOICE_GENDER_MALE = 'GENDER_MALE';
    const CHOICE_GENDER_FEMALE = 'GENDER_FEMALE';
    const CHOICE_GENDER_UNDETERMINED = 'GENDER_UNDETERMINED';

    private $_validValues = array(
        'GENDER_MALE',
        'GENDER_FEMALE',
        'GENDER_UNDETERMINED',
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