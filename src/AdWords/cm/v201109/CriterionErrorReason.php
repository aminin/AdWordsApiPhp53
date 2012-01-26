<?php

namespace AdWords\cm\v201109;



class CriterionErrorReason
{
    /**
     * Concrete type of criterion is required for ADD and SET operations.
     */
    const CHOICE_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
    /**
     * The category requested for exclusion is invalid.
     */
    const CHOICE_INVALID_EXCLUDED_CATEGORY = 'INVALID_EXCLUDED_CATEGORY';
    /**
     * Invalid keyword criteria text.
     */
    const CHOICE_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
    /**
     * Keyword text should be less than 80 chars.
     */
    const CHOICE_KEYWORD_TEXT_TOO_LONG = 'KEYWORD_TEXT_TOO_LONG';
    /**
     * Keyword text has too many words.
     */
    const CHOICE_KEYWORD_HAS_TOO_MANY_WORDS = 'KEYWORD_HAS_TOO_MANY_WORDS';
    /**
     * Keyword text has invalid characters or symbols.
     */
    const CHOICE_KEYWORD_HAS_INVALID_CHARS = 'KEYWORD_HAS_INVALID_CHARS';
    /**
     * Invalid placement URL.
     */
    const CHOICE_INVALID_PLACEMENT_URL = 'INVALID_PLACEMENT_URL';
    /**
     * Invalid user list criterion.
     */
    const CHOICE_INVALID_USER_LIST = 'INVALID_USER_LIST';
    /**
     * Invalid user interest criterion.
     */
    const CHOICE_INVALID_USER_INTEREST = 'INVALID_USER_INTEREST';
    /**
     * Placement URL has wrong format.
     */
    const CHOICE_INVALID_FORMAT_FOR_PLACEMENT_URL = 'INVALID_FORMAT_FOR_PLACEMENT_URL';
    /**
     * Placement URL is too long.
     */
    const CHOICE_PLACEMENT_URL_IS_TOO_LONG = 'PLACEMENT_URL_IS_TOO_LONG';
    /**
     * Indicates the URL contains an illegal character.
     */
    const CHOICE_PLACEMENT_URL_HAS_ILLEGAL_CHAR = 'PLACEMENT_URL_HAS_ILLEGAL_CHAR';
    /**
     * Indicates the URL contains multiple comma separated URLs.
     */
    const CHOICE_PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE = 'PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE';
    /**
     * Indicates the domain is blacklisted.
     */
    const CHOICE_PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION = 'PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION';
    /**
     * Invalid vertical path.
     */
    const CHOICE_INVALID_VERTICAL_PATH = 'INVALID_VERTICAL_PATH';
    /**
     * Criteria type can not be excluded by the customer,
     * like AOL account type cannot target site type criteria.
     */
    const CHOICE_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
    /**
     * Criteria type can not be targeted.
     */
    const CHOICE_CANNOT_ADD_CRITERIA_TYPE = 'CANNOT_ADD_CRITERIA_TYPE';
    /**
     * Product filter in the product criteria has invalid characters.
     * Operand and the argument in the filter can not have &quot;==&quot; or &quot;&amp;+&quot;.
     */
    const CHOICE_INVALID_PRODUCT_FILTER = 'INVALID_PRODUCT_FILTER';
    /**
     * Product filter in the product criteria is translated to a string as
     * operand1==argument1&amp;+operand2==argument2, maximum allowed length for
     * the string is 255 chars.
     */
    const CHOICE_PRODUCT_FILTER_TOO_LONG = 'PRODUCT_FILTER_TOO_LONG';
    /**
     * The CriterionId does not exist or is of the incorrect type.
     */
    const CHOICE_INVALID_CRITERION_ID = 'INVALID_CRITERION_ID';
    /**
     * The Criterion is not allowed to be targeted.
     */
    const CHOICE_CANNOT_TARGET_CRITERION = 'CANNOT_TARGET_CRITERION';
    /**
     * The CriterionId is not valid for the type.
     */
    const CHOICE_CRITERION_ID_AND_TYPE_MISMATCH = 'CRITERION_ID_AND_TYPE_MISMATCH';
    /**
     * Distance for the radius for the proximity criterion is invalid.
     */
    const CHOICE_INVALID_PROXIMITY_RADIUS = 'INVALID_PROXIMITY_RADIUS';
    /**
     * Units for the distance for the radius for the proximity criterion is invalid.
     */
    const CHOICE_INVALID_PROXIMITY_RADIUS_UNITS = 'INVALID_PROXIMITY_RADIUS_UNITS';
    /**
     * Street address is too short.
     */
    const CHOICE_INVALID_STREETADDRESS_LENGTH = 'INVALID_STREETADDRESS_LENGTH';
    /**
     * City name in the address is too short.
     */
    const CHOICE_INVALID_CITYNAME_LENGTH = 'INVALID_CITYNAME_LENGTH';
    /**
     * Region code in the address is too short.
     */
    const CHOICE_INVALID_REGIONCODE_LENGTH = 'INVALID_REGIONCODE_LENGTH';
    /**
     * Region name in the address is not valid.
     */
    const CHOICE_INVALID_REGIONNAME_LENGTH = 'INVALID_REGIONNAME_LENGTH';
    /**
     * Postal code in the address is not valid.
     */
    const CHOICE_INVALID_POSTALCODE_LENGTH = 'INVALID_POSTALCODE_LENGTH';
    /**
     * Country code in the address is not valid.
     */
    const CHOICE_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
    /**
     * Latitude for the GeoPoint is not valid.
     */
    const CHOICE_INVALID_LATITUDE = 'INVALID_LATITUDE';
    /**
     * Longitude for the GeoPoint is not valid.
     */
    const CHOICE_INVALID_LONGITUDE = 'INVALID_LONGITUDE';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CONCRETE_TYPE_REQUIRED',
        'INVALID_EXCLUDED_CATEGORY',
        'INVALID_KEYWORD_TEXT',
        'KEYWORD_TEXT_TOO_LONG',
        'KEYWORD_HAS_TOO_MANY_WORDS',
        'KEYWORD_HAS_INVALID_CHARS',
        'INVALID_PLACEMENT_URL',
        'INVALID_USER_LIST',
        'INVALID_USER_INTEREST',
        'INVALID_FORMAT_FOR_PLACEMENT_URL',
        'PLACEMENT_URL_IS_TOO_LONG',
        'PLACEMENT_URL_HAS_ILLEGAL_CHAR',
        'PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE',
        'PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION',
        'INVALID_VERTICAL_PATH',
        'CANNOT_EXCLUDE_CRITERIA_TYPE',
        'CANNOT_ADD_CRITERIA_TYPE',
        'INVALID_PRODUCT_FILTER',
        'PRODUCT_FILTER_TOO_LONG',
        'INVALID_CRITERION_ID',
        'CANNOT_TARGET_CRITERION',
        'CRITERION_ID_AND_TYPE_MISMATCH',
        'INVALID_PROXIMITY_RADIUS',
        'INVALID_PROXIMITY_RADIUS_UNITS',
        'INVALID_STREETADDRESS_LENGTH',
        'INVALID_CITYNAME_LENGTH',
        'INVALID_REGIONCODE_LENGTH',
        'INVALID_REGIONNAME_LENGTH',
        'INVALID_POSTALCODE_LENGTH',
        'INVALID_COUNTRY_CODE',
        'INVALID_LATITUDE',
        'INVALID_LONGITUDE',
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