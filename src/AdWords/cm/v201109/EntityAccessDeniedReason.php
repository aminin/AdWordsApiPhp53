<?php

namespace AdWords\cm\v201109;



class EntityAccessDeniedReason
{
    /**
     * User did not have read access.
     */
    const CHOICE_READ_ACCESS_DENIED = 'READ_ACCESS_DENIED';
    /**
     * User did not have write access.
     */
    const CHOICE_WRITE_ACCESS_DENIED = 'WRITE_ACCESS_DENIED';

    private $_validValues = array(
        'READ_ACCESS_DENIED',
        'WRITE_ACCESS_DENIED',
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