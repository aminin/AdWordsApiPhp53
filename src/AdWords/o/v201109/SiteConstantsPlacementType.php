<?php

namespace AdWords\o\v201109;



class SiteConstantsPlacementType
{
    /**
     * An unknown {@link PlacementType}; this may indicate that the underlying
     * type has not yet been published.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';
    /**
     * On a web page.
     */
    const CHOICE_SITE = 'SITE';
    /**
     * In a video.
     */
    const CHOICE_VIDEO = 'VIDEO';
    /**
     * In a content syndication feed.
     */
    const CHOICE_FEED = 'FEED';
    /**
     * In or associated with a game.
     */
    const CHOICE_GAME = 'GAME';
    /**
     * On a mobile device.
     */
    const CHOICE_MOBILE = 'MOBILE';

    private $_validValues = array(
        'UNKNOWN',
        'SITE',
        'VIDEO',
        'FEED',
        'GAME',
        'MOBILE',
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