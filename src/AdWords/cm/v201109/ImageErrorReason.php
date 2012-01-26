<?php

namespace AdWords\cm\v201109;



class ImageErrorReason
{
    /**
     * The image is not valid.
     */
    const CHOICE_INVALID_IMAGE = 'INVALID_IMAGE';
    /**
     * The image could not be stored.
     */
    const CHOICE_STORAGE_ERROR = 'STORAGE_ERROR';
    /**
     * There was a problem with the request.
     */
    const CHOICE_BAD_REQUEST = 'BAD_REQUEST';
    /**
     * The image is not of legal dimensions.
     */
    const CHOICE_UNEXPECTED_SIZE = 'UNEXPECTED_SIZE';
    /**
     * Animated image are not permitted.
     */
    const CHOICE_ANIMATED_NOT_ALLOWED = 'ANIMATED_NOT_ALLOWED';
    /**
     * Animation is too long.
     */
    const CHOICE_ANIMATION_TOO_LONG = 'ANIMATION_TOO_LONG';
    /**
     * There was an error on the server.
     */
    const CHOICE_SERVER_ERROR = 'SERVER_ERROR';
    /**
     * Image cannot be in CMYK color format.
     */
    const CHOICE_CMYK_JPEG_NOT_ALLOWED = 'CMYK_JPEG_NOT_ALLOWED';
    /**
     * Flash images are not permitted.
     */
    const CHOICE_FLASH_NOT_ALLOWED = 'FLASH_NOT_ALLOWED';
    /**
     * Flash images must support clickTag.
     */
    const CHOICE_FLASH_WITHOUT_CLICKTAG = 'FLASH_WITHOUT_CLICKTAG';
    /**
     * Unacceptable visual effects.
     */
    const CHOICE_ANIMATED_VISUAL_EFFECT = 'ANIMATED_VISUAL_EFFECT';
    /**
     * There was a problem with the flash image.
     */
    const CHOICE_FLASH_ERROR = 'FLASH_ERROR';
    /**
     * Incorrect image layout.
     */
    const CHOICE_LAYOUT_PROBLEM = 'LAYOUT_PROBLEM';
    /**
     * There was a problem reading the image file.
     */
    const CHOICE_PROBLEM_READING_IMAGE_FILE = 'PROBLEM_READING_IMAGE_FILE';
    /**
     * There was an error storing the image.
     */
    const CHOICE_ERROR_STORING_IMAGE = 'ERROR_STORING_IMAGE';
    /**
     * Flash cannot have network objects.
     */
    const CHOICE_FLASH_HAS_NETWORK_OBJECTS = 'FLASH_HAS_NETWORK_OBJECTS';
    /**
     * Flash cannot have network methods.
     */
    const CHOICE_FLASH_HAS_NETWORK_METHODS = 'FLASH_HAS_NETWORK_METHODS';
    /**
     * Flash cannot have a Url.
     */
    const CHOICE_FLASH_HAS_URL = 'FLASH_HAS_URL';
    /**
     * Flash cannot use mouse tracking.
     */
    const CHOICE_FLASH_HAS_MOUSE_TRACKING = 'FLASH_HAS_MOUSE_TRACKING';
    /**
     * Flash cannot have a random number.
     */
    const CHOICE_FLASH_HAS_RANDOM_NUM = 'FLASH_HAS_RANDOM_NUM';
    /**
     * Ad click target cannot be &#039;_self&#039;.
     */
    const CHOICE_FLASH_SELF_TARGETS = 'FLASH_SELF_TARGETS';
    /**
     * GetUrl method should only use &#039;_blank&#039;.
     */
    const CHOICE_FLASH_BAD_GETURL_TARGET = 'FLASH_BAD_GETURL_TARGET';
    /**
     * Flash version is not supported.
     */
    const CHOICE_FLASH_VERSION_NOT_SUPPORTED = 'FLASH_VERSION_NOT_SUPPORTED';
    /**
     * Image file is too large.
     */
    const CHOICE_FILE_TOO_LARGE = 'FILE_TOO_LARGE';
    /**
     * Image data is too large.
     */
    const CHOICE_IMAGE_DATA_TOO_LARGE = 'IMAGE_DATA_TOO_LARGE';
    /**
     * Error while processing the image.
     */
    const CHOICE_IMAGE_PROCESSING_ERROR = 'IMAGE_PROCESSING_ERROR';
    /**
     * Image is too small.
     */
    const CHOICE_IMAGE_TOO_SMALL = 'IMAGE_TOO_SMALL';
    /**
     * Input was invalid.
     */
    const CHOICE_INVALID_INPUT = 'INVALID_INPUT';
    /**
     * There was a problem reading the image file.
     */
    const CHOICE_PROBLEM_READING_FILE = 'PROBLEM_READING_FILE';

    private $_validValues = array(
        'INVALID_IMAGE',
        'STORAGE_ERROR',
        'BAD_REQUEST',
        'UNEXPECTED_SIZE',
        'ANIMATED_NOT_ALLOWED',
        'ANIMATION_TOO_LONG',
        'SERVER_ERROR',
        'CMYK_JPEG_NOT_ALLOWED',
        'FLASH_NOT_ALLOWED',
        'FLASH_WITHOUT_CLICKTAG',
        'ANIMATED_VISUAL_EFFECT',
        'FLASH_ERROR',
        'LAYOUT_PROBLEM',
        'PROBLEM_READING_IMAGE_FILE',
        'ERROR_STORING_IMAGE',
        'FLASH_HAS_NETWORK_OBJECTS',
        'FLASH_HAS_NETWORK_METHODS',
        'FLASH_HAS_URL',
        'FLASH_HAS_MOUSE_TRACKING',
        'FLASH_HAS_RANDOM_NUM',
        'FLASH_SELF_TARGETS',
        'FLASH_BAD_GETURL_TARGET',
        'FLASH_VERSION_NOT_SUPPORTED',
        'FILE_TOO_LARGE',
        'IMAGE_DATA_TOO_LARGE',
        'IMAGE_PROCESSING_ERROR',
        'IMAGE_TOO_SMALL',
        'INVALID_INPUT',
        'PROBLEM_READING_FILE',
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