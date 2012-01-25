<?php

namespace AdWords\cm\v201109;



class DeprecatedAdType
{
    /**
     * Video ad.
     */
    const CHOICE_VIDEO = 'VIDEO';
    /**
     * Click to call ad.
     */
    const CHOICE_CLICK_TO_CALL = 'CLICK_TO_CALL';
    /**
     * Instream video ad.
     */
    const CHOICE_IN_STREAM_VIDEO = 'IN_STREAM_VIDEO';
    /**
     * Froogle ad.
     */
    const CHOICE_FROOGLE = 'FROOGLE';
    /**
     * Text link ad.
     */
    const CHOICE_TEXT_LINK = 'TEXT_LINK';
    /**
     * Gadget ad.
     */
    const CHOICE_GADGET = 'GADGET';
    /**
     * Print ad.
     */
    const CHOICE_PRINT = 'PRINT';
    /**
     * Wide text ad.
     */
    const CHOICE_TEXT_WIDE = 'TEXT_WIDE';
    /**
     * Gadget template ad.
     */
    const CHOICE_GADGET_TEMPLATE = 'GADGET_TEMPLATE';
    /**
     * Text ad with video.
     */
    const CHOICE_TEXT_WITH_VIDEO = 'TEXT_WITH_VIDEO';
    /**
     * Audio ad.
     */
    const CHOICE_AUDIO = 'AUDIO';
    /**
     * Local business ads.
     */
    const CHOICE_LOCAL_BUSINESS_AD = 'LOCAL_BUSINESS_AD';
    /**
     * Audio based template ads.
     */
    const CHOICE_AUDIO_TEMPLATE = 'AUDIO_TEMPLATE';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'VIDEO',
        'CLICK_TO_CALL',
        'IN_STREAM_VIDEO',
        'FROOGLE',
        'TEXT_LINK',
        'GADGET',
        'PRINT',
        'TEXT_WIDE',
        'GADGET_TEMPLATE',
        'TEXT_WITH_VIDEO',
        'AUDIO',
        'LOCAL_BUSINESS_AD',
        'AUDIO_TEMPLATE',
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