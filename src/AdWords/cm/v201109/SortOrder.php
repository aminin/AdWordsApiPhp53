<?php

namespace AdWords\cm\v201109;



class SortOrder
{
    const CHOICE_ASCENDING = 'ASCENDING';
    const CHOICE_DESCENDING = 'DESCENDING';

    private $_validValues = array(
        'ASCENDING',
        'DESCENDING',
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