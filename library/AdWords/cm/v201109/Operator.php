<?php

namespace AdWords\cm\v201109;



class Operator
{
    /**
     * The ADD operator.
     */
    const CHOICE_ADD = 'ADD';
    /**
     * The REMOVE operator.
     */
    const CHOICE_REMOVE = 'REMOVE';
    /**
     * The SET operator (used for updates).
     */
    const CHOICE_SET = 'SET';

    private $_validValues = array(
        'ADD',
        'REMOVE',
        'SET',
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