<?php

namespace AdWords\cm\v201109;



class UserStatus
{
    /**
     * Default state of a criterion (e.g. not paused).
     */
    const CHOICE_ACTIVE = 'ACTIVE';
    /**
     * Criterion is deleted.
     */
    const CHOICE_DELETED = 'DELETED';
    /**
     * Criterion is paused. Also used to pause a criterion.
     */
    const CHOICE_PAUSED = 'PAUSED';

    private $_validValues = array(
        'ACTIVE',
        'DELETED',
        'PAUSED',
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