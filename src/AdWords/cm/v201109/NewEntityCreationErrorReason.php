<?php

namespace AdWords\cm\v201109;



class NewEntityCreationErrorReason
{
    /**
     * Do not set the id field while creating new entities.
     */
    const CHOICE_CANNOT_SET_ID_FOR_ADD = 'CANNOT_SET_ID_FOR_ADD';

    private $_validValues = array(
        'CANNOT_SET_ID_FOR_ADD',
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