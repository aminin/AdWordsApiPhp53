<?php

namespace AdWords\cm\v201109;



class SystemServingStatus
{
    /**
     * Criterion is eligible to serve.
     * Not rarely served and not inactive for search.
     */
    const CHOICE_ELIGIBLE = 'ELIGIBLE';
    /**
     * Rarely served. Criteria.isRarelyServed is true.
     */
    const CHOICE_RARELY_SERVED = 'RARELY_SERVED';

    private $_validValues = array(
        'ELIGIBLE',
        'RARELY_SERVED',
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