<?php

namespace AdWords\cm\v201109;



class MediaSize
{
    /**
     * Full size of Media.
     */
    const CHOICE_FULL = 'FULL';
    /**
     * Shunken size of media.
     */
    const CHOICE_SHRUNKEN = 'SHRUNKEN';
    /**
     * Preview size of media.
     */
    const CHOICE_PREVIEW = 'PREVIEW';
    /**
     * Video thumbnail size of Media.
     */
    const CHOICE_VIDEO_THUMBNAIL = 'VIDEO_THUMBNAIL';

    private $_validValues = array(
        'FULL',
        'SHRUNKEN',
        'PREVIEW',
        'VIDEO_THUMBNAIL',
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