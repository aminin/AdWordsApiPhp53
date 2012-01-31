<?php

namespace AdWords\o\v201109;



class MatchesRegexErrorReason
{
    const CHOICE_UNKNOWN = 'UNKNOWN';
    const CHOICE_DOES_NOT_MATCH = 'DOES_NOT_MATCH';

    private $_validValues = array(
        'UNKNOWN',
        'DOES_NOT_MATCH',
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