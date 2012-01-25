<?php

namespace AdWords\cm\v201109;



class AdGroupAdStatus
{
    /**
     * Enabled.
     */
    const CHOICE_ENABLED = 'ENABLED';
    /**
     * Paused.
     */
    const CHOICE_PAUSED = 'PAUSED';
    /**
     * Disabled.
     */
    const CHOICE_DISABLED = 'DISABLED';

    private $_validValues = array(
        'ENABLED',
        'PAUSED',
        'DISABLED',
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