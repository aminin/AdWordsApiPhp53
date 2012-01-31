<?php

namespace AdWords\o\v201109;



class SiteConstantsAdType
{
    /**
     * Unknown ad type.  This usually indicates that the actual ad type
     * has not yet been published.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';
    /**
     * Simple text ads.
     */
    const CHOICE_TEXT = 'TEXT';
    /**
     * All &quot;rich&quot; ad types, for example image and video ads.
     */
    const CHOICE_DISPLAY = 'DISPLAY';
    /**
     * Instream video ads.
     */
    const CHOICE_INSTREAM = 'INSTREAM';

    private $_validValues = array(
        'UNKNOWN',
        'TEXT',
        'DISPLAY',
        'INSTREAM',
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