<?php

namespace AdWords\cm\v201109;



class StatsNetwork
{
    /**
     * Aggregate of {@code GOOGLE_SEARCH} and {@code SEARCH_NETWORK}.
     */
    const CHOICE_SEARCH = 'SEARCH';
    const CHOICE_GOOGLE_SEARCH = 'GOOGLE_SEARCH';
    const CHOICE_SEARCH_NETWORK = 'SEARCH_NETWORK';
    /**
     * Aggregate of {@code CONTENT_KEYWORD_BID} and {@code CONTENT_PLACEMENT_BID}.
     */
    const CHOICE_CONTENT = 'CONTENT';
    const CHOICE_CONTENT_KEYWORD_BID = 'CONTENT_KEYWORD_BID';
    const CHOICE_CONTENT_PLACEMENT_BID = 'CONTENT_PLACEMENT_BID';
    const CHOICE_ALL = 'ALL';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'SEARCH',
        'GOOGLE_SEARCH',
        'SEARCH_NETWORK',
        'CONTENT',
        'CONTENT_KEYWORD_BID',
        'CONTENT_PLACEMENT_BID',
        'ALL',
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