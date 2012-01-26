<?php

namespace AdWords\cm\v201109;



class EntityNotFoundReason
{
    /**
     * The specified id refered to an entity which either doesn&#039;t exist or is not accessible to the
     * customer. e.g. campaign belongs to another customer.
     */
    const CHOICE_INVALID_ID = 'INVALID_ID';

    private $_validValues = array(
        'INVALID_ID',
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