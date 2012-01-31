<?php

namespace AdWords\o\v201109;



class RequestType
{
    /**
     * Request for new ideas based on other entries in selector.
     * This {@link RequestType} can be used to request other ideas
     * using keyword/placements that the user already has.
     */
    const CHOICE_IDEAS = 'IDEAS';
    /**
     * Request for stats for entries in selector.
     * This {@link RequestType} can be used to request
     * the stats for keywords/placements that the user already has.
     */
    const CHOICE_STATS = 'STATS';

    private $_validValues = array(
        'IDEAS',
        'STATS',
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