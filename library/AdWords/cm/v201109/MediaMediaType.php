<?php

namespace AdWords\cm\v201109;



class MediaMediaType
{
    /**
     * Audio file.
     */
    const CHOICE_AUDIO = 'AUDIO';
    /**
     * Animated image, such as animated GIF.
     */
    const CHOICE_DYNAMIC_IMAGE = 'DYNAMIC_IMAGE';
    /**
     * Small image; used for map ad.
     */
    const CHOICE_ICON = 'ICON';
    /**
     * Static image; for image ad.
     */
    const CHOICE_IMAGE = 'IMAGE';
    /**
     * Predefined standard icon; used for map ads.
     */
    const CHOICE_STANDARD_ICON = 'STANDARD_ICON';
    /**
     * Video file.
     */
    const CHOICE_VIDEO = 'VIDEO';

    private $_validValues = array(
        'AUDIO',
        'DYNAMIC_IMAGE',
        'ICON',
        'IMAGE',
        'STANDARD_ICON',
        'VIDEO',
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