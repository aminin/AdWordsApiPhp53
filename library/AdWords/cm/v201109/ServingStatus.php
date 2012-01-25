<?php

namespace AdWords\cm\v201109;



class ServingStatus
{
    /**
     * The campaign is currently serving ads.
     */
    const CHOICE_SERVING = 'SERVING';
    /**
     * This is the catch-all if none of the other statuses make sense.
     * Such a campaign is not serving, but none of the other statuses
     * are sensible options.
     */
    const CHOICE_NONE = 'NONE';
    /**
     * The campaign end date has been past.
     */
    const CHOICE_ENDED = 'ENDED';
    /**
     * The campaign start date has not yet been reached.
     */
    const CHOICE_PENDING = 'PENDING';
    /**
     * The campaign has been suspended probably from lack of allocated funds.
     */
    const CHOICE_SUSPENDED = 'SUSPENDED';

    private $_validValues = array(
        'SERVING',
        'NONE',
        'ENDED',
        'PENDING',
        'SUSPENDED',
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