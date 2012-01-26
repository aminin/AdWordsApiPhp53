<?php

namespace AdWords\cm\v201109;



class NullErrorReason
{
    /**
     * Specified list/container must not contain any null elements
     */
    const CHOICE_NULL_CONTENT = 'NULL_CONTENT';

    private $_validValues = array(
        'NULL_CONTENT',
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