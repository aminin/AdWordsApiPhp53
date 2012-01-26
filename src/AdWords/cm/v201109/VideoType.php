<?php

namespace AdWords\cm\v201109;



class VideoType
{
    /**
     * The Adobe Flash video format (.swf).
     */
    const CHOICE_ADOBE = 'ADOBE';
    /**
     * The RealVideo format (.rm or .ram).
     */
    const CHOICE_REALPLAYER = 'REALPLAYER';
    /**
     * The QuickTime format (.mov).
     */
    const CHOICE_QUICKTIME = 'QUICKTIME';
    /**
     * The Windows Media format (.wmv).
     */
    const CHOICE_WINDOWSMEDIA = 'WINDOWSMEDIA';

    private $_validValues = array(
        'ADOBE',
        'REALPLAYER',
        'QUICKTIME',
        'WINDOWSMEDIA',
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