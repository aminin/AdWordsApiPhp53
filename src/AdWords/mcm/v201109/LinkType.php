<?php

namespace AdWords\mcm\v201109;



class LinkType
{
    /**
     * The manager has been granted permission to control the managed account.
     */
    const CHOICE_ESTABLISHED = 'ESTABLISHED';
    /**
     * Represents an invitation to link that one of the accounts hasn&#039;t yet accepted.
     */
    const CHOICE_INVITATION = 'INVITATION';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'ESTABLISHED',
        'INVITATION',
        'UNKNOWN',
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