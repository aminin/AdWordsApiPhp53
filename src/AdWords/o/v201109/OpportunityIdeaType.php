<?php

namespace AdWords\o\v201109;



class OpportunityIdeaType
{
    /**
     * Keyword idea.
     */
    const CHOICE_KEYWORD = 'KEYWORD';
    /**
     * Bid idea.
     */
    const CHOICE_BID = 'BID';
    /**
     * Budget idea.
     */
    const CHOICE_BUDGET = 'BUDGET';

    private $_validValues = array(
        'KEYWORD',
        'BID',
        'BUDGET',
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