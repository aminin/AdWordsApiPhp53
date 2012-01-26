<?php

namespace AdWords\cm\v201109;



class MediaMimeType
{
    /**
     * MIME type of image/jpeg
     */
    const CHOICE_IMAGE_JPEG = 'IMAGE_JPEG';
    /**
     * MIME type of image/gif
     */
    const CHOICE_IMAGE_GIF = 'IMAGE_GIF';
    /**
     * MIME type of image/png
     */
    const CHOICE_IMAGE_PNG = 'IMAGE_PNG';
    /**
     * MIME type of application/x-shockwave-flash
     */
    const CHOICE_FLASH = 'FLASH';
    /**
     * MIME type of text/html
     */
    const CHOICE_TEXT_HTML = 'TEXT_HTML';
    /**
     * MIME type of application/pdf
     */
    const CHOICE_PDF = 'PDF';
    /**
     * MIME type of application/msword
     */
    const CHOICE_MSWORD = 'MSWORD';
    /**
     * MIME type of application/vnd.ms-excel
     */
    const CHOICE_MSEXCEL = 'MSEXCEL';
    /**
     * MIME type of application/rtf
     */
    const CHOICE_RTF = 'RTF';
    /**
     * MIME type of audio/wav
     */
    const CHOICE_AUDIO_WAV = 'AUDIO_WAV';
    /**
     * MIME type of audio/mp3
     */
    const CHOICE_AUDIO_MP3 = 'AUDIO_MP3';

    private $_validValues = array(
        'IMAGE_JPEG',
        'IMAGE_GIF',
        'IMAGE_PNG',
        'FLASH',
        'TEXT_HTML',
        'PDF',
        'MSWORD',
        'MSEXCEL',
        'RTF',
        'AUDIO_WAV',
        'AUDIO_MP3',
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