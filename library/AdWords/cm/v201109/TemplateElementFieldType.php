<?php

namespace AdWords\cm\v201109;



class TemplateElementFieldType
{
    /**
     * Address field type (text).
     */
    const CHOICE_ADDRESS = 'ADDRESS';
    /**
     * Audio field type (Media).
     */
    const CHOICE_AUDIO = 'AUDIO';
    /**
     * Enum field type (text).
     */
    const CHOICE_ENUM = 'ENUM';
    /**
     * Image field type (Media).
     */
    const CHOICE_IMAGE = 'IMAGE';
    /**
     * Background Image field type (Media).
     */
    const CHOICE_BACKGROUND_IMAGE = 'BACKGROUND_IMAGE';
    /**
     * Number field type (text).
     */
    const CHOICE_NUMBER = 'NUMBER';
    /**
     * Text field type (text).
     */
    const CHOICE_TEXT = 'TEXT';
    /**
     * URL field type (text).
     */
    const CHOICE_URL = 'URL';
    /**
     * Video field type (Media).
     */
    const CHOICE_VIDEO = 'VIDEO';
    /**
     * Visible URL field type (text).
     */
    const CHOICE_VISIBLE_URL = 'VISIBLE_URL';

    private $_validValues = array(
        'ADDRESS',
        'AUDIO',
        'ENUM',
        'IMAGE',
        'BACKGROUND_IMAGE',
        'NUMBER',
        'TEXT',
        'URL',
        'VIDEO',
        'VISIBLE_URL',
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