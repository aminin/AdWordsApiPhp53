<?php

namespace AdWords\cm\v201109;



class CampaignStatus
{
    /**
     * Campaign is currently serving ads depending on budget information.
     */
    const CHOICE_ACTIVE = 'ACTIVE';
    /**
     * Campaign has been deleted.
     */
    const CHOICE_DELETED = 'DELETED';
    /**
     * Campaign has been paused by the user.
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