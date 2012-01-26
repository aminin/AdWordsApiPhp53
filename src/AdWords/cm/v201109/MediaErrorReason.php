<?php

namespace AdWords\cm\v201109;



class MediaErrorReason
{
    /**
     * Cannot add a standard icon type
     */
    const CHOICE_CANNOT_ADD_STANDARD_ICON = 'CANNOT_ADD_STANDARD_ICON';
    /**
     * May only select Standard Icons alone
     */
    const CHOICE_CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES = 'CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES';
    /**
     * A media with given type and reference id already exists
     */
    const CHOICE_DUPLICATE_MEDIA = 'DUPLICATE_MEDIA';
    /**
     * A required field was not specified or is an empty string.
     */
    const CHOICE_EMPTY_FIELD = 'EMPTY_FIELD';
    /**
     * A media may only be modified once per call
     */
    const CHOICE_ENTITY_REFERENCED_IN_MULTIPLE_OPS = 'ENTITY_REFERENCED_IN_MULTIPLE_OPS';
    /**
     * Field is not supported for the media sub type.
     */
    const CHOICE_FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE = 'FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE';
    /**
     * The media id is invalid
     */
    const CHOICE_INVALID_MEDIA_ID = 'INVALID_MEDIA_ID';
    /**
     * The media type is invalid
     */
    const CHOICE_INVALID_MEDIA_TYPE = 'INVALID_MEDIA_TYPE';
    /**
     * The media subtype is invalid
     */
    const CHOICE_INVALID_MEDIA_SUB_TYPE = 'INVALID_MEDIA_SUB_TYPE';
    /**
     * The media reference id is invalid
     */
    const CHOICE_INVALID_REFERENCE_ID = 'INVALID_REFERENCE_ID';
    /**
     * The YouTube video id is invalid
     */
    const CHOICE_INVALID_YOU_TUBE_ID = 'INVALID_YOU_TUBE_ID';
    /**
     * The YouTube video id is syntactically valid but the video was not found.
     */
    const CHOICE_YOU_TUBE_VIDEO_NOT_FOUND = 'YOU_TUBE_VIDEO_NOT_FOUND';
    /**
     * YouTube is unavailable for requesting video data.
     */
    const CHOICE_YOU_TUBE_SERVICE_UNAVAILABLE = 'YOU_TUBE_SERVICE_UNAVAILABLE';
    /**
     * The YouTube video has a non positive duration.
     */
    const CHOICE_YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION = 'YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION';
    /**
     * Media has failed transcoding
     */
    const CHOICE_MEDIA_FAILED_TRANSCODING = 'MEDIA_FAILED_TRANSCODING';
    /**
     * The MediaType does not match the actual media object&#039;s type
     */
    const CHOICE_MEDIA_TYPE_DOES_NOT_MATCH_OBJECT_TYPE = 'MEDIA_TYPE_DOES_NOT_MATCH_OBJECT_TYPE';
    /**
     * None of the fields have been specified.
     */
    const CHOICE_NO_FIELDS_SPECIFIED = 'NO_FIELDS_SPECIFIED';
    /**
     * One of reference Id or media Id must be specified
     */
    const CHOICE_NULL_REFERENCE_ID_AND_MEDIA_ID = 'NULL_REFERENCE_ID_AND_MEDIA_ID';
    /**
     * The string has too many characters.
     */
    const CHOICE_TOO_LONG = 'TOO_LONG';
    /**
     * The specified operation is not supported.  Only ADD, SET, and REMOVE
     * are supported
     */
    const CHOICE_UNSUPPORTED_OPERATION = 'UNSUPPORTED_OPERATION';
    const CHOICE_UNSUPPORTED_TYPE = 'UNSUPPORTED_TYPE';

    private $_validValues = array(
        'CANNOT_ADD_STANDARD_ICON',
        'CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES',
        'DUPLICATE_MEDIA',
        'EMPTY_FIELD',
        'ENTITY_REFERENCED_IN_MULTIPLE_OPS',
        'FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE',
        'INVALID_MEDIA_ID',
        'INVALID_MEDIA_TYPE',
        'INVALID_MEDIA_SUB_TYPE',
        'INVALID_REFERENCE_ID',
        'INVALID_YOU_TUBE_ID',
        'YOU_TUBE_VIDEO_NOT_FOUND',
        'YOU_TUBE_SERVICE_UNAVAILABLE',
        'YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION',
        'MEDIA_FAILED_TRANSCODING',
        'MEDIA_TYPE_DOES_NOT_MATCH_OBJECT_TYPE',
        'NO_FIELDS_SPECIFIED',
        'NULL_REFERENCE_ID_AND_MEDIA_ID',
        'TOO_LONG',
        'UNSUPPORTED_OPERATION',
        'UNSUPPORTED_TYPE',
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