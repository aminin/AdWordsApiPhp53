<?php

namespace AdWords\cm\v201109;



class KeywordMatchType
{
    /**
     * Exact match
     */
    const CHOICE_EXACT = 'EXACT';
    /**
     * Phrase match
     */
    const CHOICE_PHRASE = 'PHRASE';
    /**
     * Broad match
     */
    const CHOICE_BROAD = 'BROAD';

    private $_validValues = array(
        'EXACT',
        'PHRASE',
        'BROAD',
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