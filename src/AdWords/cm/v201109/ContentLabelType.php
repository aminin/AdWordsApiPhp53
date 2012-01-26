<?php

namespace AdWords\cm\v201109;



class ContentLabelType
{
    /**
     * Sexually suggestive content
     */
    const CHOICE_ADULTISH = 'ADULTISH';
    /**
     * Error pages
     */
    const CHOICE_AFE = 'AFE';
    /**
     * Below the fold placements
     */
    const CHOICE_BELOW_THE_FOLD = 'BELOW_THE_FOLD';
    /**
     * Military &amp; international conflict
     */
    const CHOICE_CONFLICT = 'CONFLICT';
    /**
     * Parked domains
     */
    const CHOICE_DP = 'DP';
    /**
     * Embedded video
     */
    const CHOICE_EMBEDDED_VIDEO = 'EMBEDDED_VIDEO';
    /**
     * Games
     */
    const CHOICE_GAMES = 'GAMES';
    /**
     * Juvenile, gross &amp; bizarre content
     */
    const CHOICE_JACKASS = 'JACKASS';
    /**
     * Profanity &amp; rough language
     */
    const CHOICE_PROFANITY = 'PROFANITY';
    /**
     * Forums
     */
    const CHOICE_UGC_FORUMS = 'UGC_FORUMS';
    /**
     * Image-sharing pages
     */
    const CHOICE_UGC_IMAGES = 'UGC_IMAGES';
    /**
     * Social networks
     */
    const CHOICE_UGC_SOCIAL = 'UGC_SOCIAL';
    /**
     * Video-sharing pages
     */
    const CHOICE_UGC_VIDEOS = 'UGC_VIDEOS';
    /**
     * Crime, police &amp; emergency
     */
    const CHOICE_SIRENS = 'SIRENS';
    /**
     * Death &amp; tragedy
     */
    const CHOICE_TRAGEDY = 'TRAGEDY';
    /**
     * Video
     */
    const CHOICE_VIDEO = 'VIDEO';

    private $_validValues = array(
        'ADULTISH',
        'AFE',
        'BELOW_THE_FOLD',
        'CONFLICT',
        'DP',
        'EMBEDDED_VIDEO',
        'GAMES',
        'JACKASS',
        'PROFANITY',
        'UGC_FORUMS',
        'UGC_IMAGES',
        'UGC_SOCIAL',
        'UGC_VIDEOS',
        'SIRENS',
        'TRAGEDY',
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