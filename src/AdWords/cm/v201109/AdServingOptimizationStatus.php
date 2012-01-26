<?php

namespace AdWords\cm\v201109;



class AdServingOptimizationStatus
{
    /**
     * Ad serving is optimized based on CTR for the campaign.
     */
    const CHOICE_OPTIMIZE = 'OPTIMIZE';
    /**
     * Ads are rotated evenly.
     */
    const CHOICE_ROTATE = 'ROTATE';
    /**
     * Ad serving optimization status is not available.
     */
    const CHOICE_UNAVAILABLE = 'UNAVAILABLE';

    private $_validValues = array(
        'OPTIMIZE',
        'ROTATE',
        'UNAVAILABLE',
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