<?php

namespace AdWords\cm\v201109;



class AdGroupBidLandscapeType
{
    /**
     * Signifies that the default bid is applied to all criteria.
     */
    const CHOICE_UNIFORM = 'UNIFORM';
    /**
     * Signifies that the criterion bids override the default bid.
     */
    const CHOICE_DEFAULT = 'DEFAULT';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'UNIFORM',
        'DEFAULT',
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