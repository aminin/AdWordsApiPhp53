<?php

namespace AdWords\o\v201109;



class SiteConstantsAdFormat
{
    /**
     * Unknown ad format.  This usually indicates that the actual ad format
     * has not yet been published.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';
    /**
     * A simple text ad.
     */
    const CHOICE_TEXT = 'TEXT';
    /**
     * An image ad.
     */
    const CHOICE_IMAGE = 'IMAGE';
    /**
     * A click-to-play video ad displaying in a non-video context.
     */
    const CHOICE_VIDEO = 'VIDEO';
    /**
     * A video ad displaying as part of other video content.
     */
    const CHOICE_INSTREAM = 'INSTREAM';

    private $_validValues = array(
        'UNKNOWN',
        'TEXT',
        'IMAGE',
        'VIDEO',
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