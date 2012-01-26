<?php

namespace AdWords\cm\v201109;



class AdErrorReason
{
    /**
     * Estimating character sizes the string is too long.
     */
    const CHOICE_APPROXIMATELY_TOO_LONG = 'APPROXIMATELY_TOO_LONG';
    /**
     * Estimating character sizes the string is too short.
     */
    const CHOICE_APPROXIMATELY_TOO_SHORT = 'APPROXIMATELY_TOO_SHORT';
    /**
     * There is a problem with the snippet.
     */
    const CHOICE_BAD_SNIPPET = 'BAD_SNIPPET';
    /**
     * business name and url cannot be set at the same time
     */
    const CHOICE_CANNOT_SET_BUSINESS_NAME_IF_URL_SET = 'CANNOT_SET_BUSINESS_NAME_IF_URL_SET';
    /**
     * Cannot specify a url for the ad type
     */
    const CHOICE_CANNOT_SET_URL = 'CANNOT_SET_URL';
    /**
     * Customer is not approved for mobile ads.
     */
    const CHOICE_CUSTOMER_NOT_APPROVED_MOBILEADS = 'CUSTOMER_NOT_APPROVED_MOBILEADS';
    /**
     * Customer is not approved for 3PAS richmedia ads.
     */
    const CHOICE_CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS = 'CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS';
    /**
     * Customer is not approved for 3PAS redirect richmedia (Ad Exchange) ads.
     */
    const CHOICE_CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS = 'CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS';
    /**
     * Customer is not eligible for updating beacon url
     */
    const CHOICE_CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL = 'CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL';
    /**
     * There already exists an ad with the same dimensions in the union.
     */
    const CHOICE_DIMENSION_ALREADY_IN_UNION = 'DIMENSION_ALREADY_IN_UNION';
    /**
     * Ad&#039;s dimension must be set before setting union dimension.
     */
    const CHOICE_DIMENSION_MUST_BE_SET = 'DIMENSION_MUST_BE_SET';
    /**
     * Ad&#039;s dimension must be included in the union dimensions.
     */
    const CHOICE_DIMENSION_NOT_IN_UNION = 'DIMENSION_NOT_IN_UNION';
    /**
     * Display Url cannot be specified (applies to Ad Exchange Ads)
     */
    const CHOICE_DISPLAY_URL_CANNOT_BE_SPECIFIED = 'DISPLAY_URL_CANNOT_BE_SPECIFIED';
    /**
     * Telephone number contains invalid characters or invalid format.
     * Please re-enter your number using digits (0-9), dashes (-), and parentheses only.
     */
    const CHOICE_DOMESTIC_PHONE_NUMBER_FORMAT = 'DOMESTIC_PHONE_NUMBER_FORMAT';
    /**
     * Emergency telephone numbers are not allowed.
     * Please enter a valid domestic phone number to connect customers to your business.
     */
    const CHOICE_EMERGENCY_PHONE_NUMBER = 'EMERGENCY_PHONE_NUMBER';
    /**
     * A required field was not specified or is an empty string.
     */
    const CHOICE_EMPTY_FIELD = 'EMPTY_FIELD';
    /**
     * The status cannot differ among template ads of the same union.
     */
    const CHOICE_INCONSISTENT_STATUS_IN_TEMPLATE_UNION = 'INCONSISTENT_STATUS_IN_TEMPLATE_UNION';
    /**
     * The length of the string is not valid.
     */
    const CHOICE_INCORRECT_LENGTH = 'INCORRECT_LENGTH';
    /**
     * User cannot create mobile ad for countries targeted in specified campaign.
     */
    const CHOICE_INVALID_AD_ADDRESS_CAMPAIGN_TARGET = 'INVALID_AD_ADDRESS_CAMPAIGN_TARGET';
    /**
     * Invalid Ad type. A specific type of Ad is required.
     */
    const CHOICE_INVALID_AD_TYPE = 'INVALID_AD_TYPE';
    /**
     * Headline, description or phone cannot be present when creating mobile image ad.
     */
    const CHOICE_INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE = 'INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE';
    /**
     * Image cannot be present when creating mobile text ad.
     */
    const CHOICE_INVALID_ATTRIBUTES_FOR_MOBILE_TEXT = 'INVALID_ATTRIBUTES_FOR_MOBILE_TEXT';
    /**
     * Creative&#039;s country code is not valid.
     */
    const CHOICE_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
    /**
     * An input error whose real reason was not properly mapped (should not happen).
     */
    const CHOICE_INVALID_INPUT = 'INVALID_INPUT';
    /**
     * An invalid markup language was entered.
     */
    const CHOICE_INVALID_MARKUP_LANGUAGE = 'INVALID_MARKUP_LANGUAGE';
    /**
     * An invalid mobile carrier was entered.
     */
    const CHOICE_INVALID_MOBILE_CARRIER = 'INVALID_MOBILE_CARRIER';
    /**
     * Specified mobile carriers target a country not targeted by the campaign.
     */
    const CHOICE_INVALID_MOBILE_CARRIER_TARGET = 'INVALID_MOBILE_CARRIER_TARGET';
    /**
     * Wrong number of elements for given element type
     */
    const CHOICE_INVALID_NUMBER_OF_ELEMENTS = 'INVALID_NUMBER_OF_ELEMENTS';
    /**
     * The format of the telephone number is incorrect.
     * Please re-enter the number using the correct format.
     */
    const CHOICE_INVALID_PHONE_NUMBER_FORMAT = 'INVALID_PHONE_NUMBER_FORMAT';
    /**
     * The certified vendor format id is incorrect.
     */
    const CHOICE_INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID = 'INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID';
    /**
     * The template ad data contains validation errors.
     */
    const CHOICE_INVALID_TEMPLATE_DATA = 'INVALID_TEMPLATE_DATA';
    /**
     * The template field doesn&#039;t have have the correct type.
     */
    const CHOICE_INVALID_TEMPLATE_ELEMENT_FIELD_TYPE = 'INVALID_TEMPLATE_ELEMENT_FIELD_TYPE';
    /**
     * Invalid template id.
     */
    const CHOICE_INVALID_TEMPLATE_ID = 'INVALID_TEMPLATE_ID';
    /**
     * After substituting replacement strings, the line is too wide.
     */
    const CHOICE_LINE_TOO_WIDE = 'LINE_TOO_WIDE';
    /**
     * When entering a markup language the Destination URL must be entered.
     */
    const CHOICE_MARKUP_LANGUAGES_PRESENT = 'MARKUP_LANGUAGES_PRESENT';
    /**
     * Missing address component in template element address field.
     */
    const CHOICE_MISSING_ADDRESS_COMPONENT = 'MISSING_ADDRESS_COMPONENT';
    /**
     * An ad name must be entered.
     */
    const CHOICE_MISSING_ADVERTISEMENT_NAME = 'MISSING_ADVERTISEMENT_NAME';
    /**
     * Business name must be entered.
     */
    const CHOICE_MISSING_BUSINESS_NAME = 'MISSING_BUSINESS_NAME';
    /**
     * Description (line 2) must be entered.
     */
    const CHOICE_MISSING_DESCRIPTION1 = 'MISSING_DESCRIPTION1';
    /**
     * Description (line 3) must be entered.
     */
    const CHOICE_MISSING_DESCRIPTION2 = 'MISSING_DESCRIPTION2';
    /**
     * A destination URL must be entered.
     */
    const CHOICE_MISSING_DESTINATION_URL = 'MISSING_DESTINATION_URL';
    /**
     * A valid dimension must be specified for this ad.
     */
    const CHOICE_MISSING_DIMENSION = 'MISSING_DIMENSION';
    /**
     * A display URL must be entered.
     */
    const CHOICE_MISSING_DISPLAY_URL = 'MISSING_DISPLAY_URL';
    /**
     * Headline must be entered.
     */
    const CHOICE_MISSING_HEADLINE = 'MISSING_HEADLINE';
    /**
     * A height must be entered.
     */
    const CHOICE_MISSING_HEIGHT = 'MISSING_HEIGHT';
    /**
     * An image must be entered.
     */
    const CHOICE_MISSING_IMAGE = 'MISSING_IMAGE';
    /**
     * The markup language in which your site is written must be entered.
     */
    const CHOICE_MISSING_MARKUP_LANGUAGES = 'MISSING_MARKUP_LANGUAGES';
    /**
     * A mobile carrier must be entered.
     */
    const CHOICE_MISSING_MOBILE_CARRIER = 'MISSING_MOBILE_CARRIER';
    /**
     * Phone number must be entered.
     */
    const CHOICE_MISSING_PHONE = 'MISSING_PHONE';
    /**
     * Missing required template fields
     */
    const CHOICE_MISSING_REQUIRED_TEMPLATE_FIELDS = 'MISSING_REQUIRED_TEMPLATE_FIELDS';
    /**
     * Missing a required field value
     */
    const CHOICE_MISSING_TEMPLATE_FIELD_VALUE = 'MISSING_TEMPLATE_FIELD_VALUE';
    /**
     * The ad must have text.
     */
    const CHOICE_MISSING_TEXT = 'MISSING_TEXT';
    /**
     * Ad must link to a mobile web page or connect users to your business telephone, or both.
     * Please enter a mobile Destination URL and/or a business telephone number.
     */
    const CHOICE_MISSING_URL_AND_PHONE = 'MISSING_URL_AND_PHONE';
    /**
     * A visible URL must be entered.
     */
    const CHOICE_MISSING_VISIBLE_URL = 'MISSING_VISIBLE_URL';
    /**
     * A width must be entered.
     */
    const CHOICE_MISSING_WIDTH = 'MISSING_WIDTH';
    /**
     * TempAdUnionId must be use when adding template ads.
     */
    const CHOICE_MUST_USE_TEMP_AD_UNION_ID_ON_ADD = 'MUST_USE_TEMP_AD_UNION_ID_ON_ADD';
    /**
     * The string has too many characters.
     */
    const CHOICE_TOO_LONG = 'TOO_LONG';
    /**
     * The string has too few characters.
     */
    const CHOICE_TOO_SHORT = 'TOO_SHORT';
    /**
     * Ad union dimensions cannot change for saved ads.
     */
    const CHOICE_UNION_DIMENSIONS_CANNOT_CHANGE = 'UNION_DIMENSIONS_CANNOT_CHANGE';
    /**
     * Address component is not {country, lat, lng}.
     */
    const CHOICE_UNKNOWN_ADDRESS_COMPONENT = 'UNKNOWN_ADDRESS_COMPONENT';
    /**
     * Unknown unique field name
     */
    const CHOICE_UNKNOWN_FIELD_NAME = 'UNKNOWN_FIELD_NAME';
    /**
     * Unknown unique name (template element type specifier)
     */
    const CHOICE_UNKNOWN_UNIQUE_NAME = 'UNKNOWN_UNIQUE_NAME';
    /**
     * Unsupported ad dimension
     */
    const CHOICE_UNSUPPORTED_DIMENSIONS = 'UNSUPPORTED_DIMENSIONS';
    /**
     * URL starts with an invalid scheme.
     */
    const CHOICE_URL_INVALID_SCHEME = 'URL_INVALID_SCHEME';
    /**
     * URL ends with an invalid top-level domain name.
     */
    const CHOICE_URL_INVALID_TOP_LEVEL_DOMAIN = 'URL_INVALID_TOP_LEVEL_DOMAIN';
    /**
     * URL contains illegal characters.
     */
    const CHOICE_URL_MALFORMED = 'URL_MALFORMED';
    /**
     * URL must contain a host name.
     */
    const CHOICE_URL_NO_HOST = 'URL_NO_HOST';
    /**
     * URL host name too long to be stored as visible URL (applies to Ad Exchange ads)
     */
    const CHOICE_URL_HOST_NAME_TOO_LONG = 'URL_HOST_NAME_TOO_LONG';
    /**
     * URL must start with a scheme.
     */
    const CHOICE_URL_NO_SCHEME = 'URL_NO_SCHEME';
    /**
     * URL should end in a valid domain extension, such as .com or .net.
     */
    const CHOICE_URL_NO_TOP_LEVEL_DOMAIN = 'URL_NO_TOP_LEVEL_DOMAIN';
    /**
     * URL must not end with a path.
     */
    const CHOICE_URL_PATH_NOT_ALLOWED = 'URL_PATH_NOT_ALLOWED';
    /**
     * URL must not specify a port.
     */
    const CHOICE_URL_PORT_NOT_ALLOWED = 'URL_PORT_NOT_ALLOWED';
    /**
     * URL must not contain a query.
     */
    const CHOICE_URL_QUERY_NOT_ALLOWED = 'URL_QUERY_NOT_ALLOWED';
    /**
     * The user does not have permissions to create a template ad for the given
     * template.
     */
    const CHOICE_USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE = 'USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE';
    /**
     * Format is invalid
     */
    const CHOICE_INVALID_FORMAT = 'INVALID_FORMAT';
    /**
     * Template element is mising
     */
    const CHOICE_ELEMENT_NOT_PRESENT = 'ELEMENT_NOT_PRESENT';
    /**
     * Error occurred during image processing
     */
    const CHOICE_IMAGE_ERROR = 'IMAGE_ERROR';
    /**
     * The value is not within the valid range
     */
    const CHOICE_VALUE_NOT_IN_RANGE = 'VALUE_NOT_IN_RANGE';
    /**
     * Template element field is not present
     */
    const CHOICE_FIELD_NOT_PRESENT = 'FIELD_NOT_PRESENT';
    /**
     * Address is incomplete
     */
    const CHOICE_ADDRESS_NOT_COMPLETE = 'ADDRESS_NOT_COMPLETE';
    /**
     * Invalid address
     */
    const CHOICE_ADDRESS_INVALID = 'ADDRESS_INVALID';
    /**
     * Error retrieving specified video
     */
    const CHOICE_VIDEO_RETRIEVAL_ERROR = 'VIDEO_RETRIEVAL_ERROR';
    /**
     * Error processing audio
     */
    const CHOICE_AUDIO_ERROR = 'AUDIO_ERROR';
    /**
     * Display URL is incorrect for YouTube PYV ads
     */
    const CHOICE_INVALID_YOUTUBE_DISPLAY_URL = 'INVALID_YOUTUBE_DISPLAY_URL';

    private $_validValues = array(
        'APPROXIMATELY_TOO_LONG',
        'APPROXIMATELY_TOO_SHORT',
        'BAD_SNIPPET',
        'CANNOT_SET_BUSINESS_NAME_IF_URL_SET',
        'CANNOT_SET_URL',
        'CUSTOMER_NOT_APPROVED_MOBILEADS',
        'CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS',
        'CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS',
        'CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL',
        'DIMENSION_ALREADY_IN_UNION',
        'DIMENSION_MUST_BE_SET',
        'DIMENSION_NOT_IN_UNION',
        'DISPLAY_URL_CANNOT_BE_SPECIFIED',
        'DOMESTIC_PHONE_NUMBER_FORMAT',
        'EMERGENCY_PHONE_NUMBER',
        'EMPTY_FIELD',
        'INCONSISTENT_STATUS_IN_TEMPLATE_UNION',
        'INCORRECT_LENGTH',
        'INVALID_AD_ADDRESS_CAMPAIGN_TARGET',
        'INVALID_AD_TYPE',
        'INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE',
        'INVALID_ATTRIBUTES_FOR_MOBILE_TEXT',
        'INVALID_COUNTRY_CODE',
        'INVALID_INPUT',
        'INVALID_MARKUP_LANGUAGE',
        'INVALID_MOBILE_CARRIER',
        'INVALID_MOBILE_CARRIER_TARGET',
        'INVALID_NUMBER_OF_ELEMENTS',
        'INVALID_PHONE_NUMBER_FORMAT',
        'INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID',
        'INVALID_TEMPLATE_DATA',
        'INVALID_TEMPLATE_ELEMENT_FIELD_TYPE',
        'INVALID_TEMPLATE_ID',
        'LINE_TOO_WIDE',
        'MARKUP_LANGUAGES_PRESENT',
        'MISSING_ADDRESS_COMPONENT',
        'MISSING_ADVERTISEMENT_NAME',
        'MISSING_BUSINESS_NAME',
        'MISSING_DESCRIPTION1',
        'MISSING_DESCRIPTION2',
        'MISSING_DESTINATION_URL',
        'MISSING_DIMENSION',
        'MISSING_DISPLAY_URL',
        'MISSING_HEADLINE',
        'MISSING_HEIGHT',
        'MISSING_IMAGE',
        'MISSING_MARKUP_LANGUAGES',
        'MISSING_MOBILE_CARRIER',
        'MISSING_PHONE',
        'MISSING_REQUIRED_TEMPLATE_FIELDS',
        'MISSING_TEMPLATE_FIELD_VALUE',
        'MISSING_TEXT',
        'MISSING_URL_AND_PHONE',
        'MISSING_VISIBLE_URL',
        'MISSING_WIDTH',
        'MUST_USE_TEMP_AD_UNION_ID_ON_ADD',
        'TOO_LONG',
        'TOO_SHORT',
        'UNION_DIMENSIONS_CANNOT_CHANGE',
        'UNKNOWN_ADDRESS_COMPONENT',
        'UNKNOWN_FIELD_NAME',
        'UNKNOWN_UNIQUE_NAME',
        'UNSUPPORTED_DIMENSIONS',
        'URL_INVALID_SCHEME',
        'URL_INVALID_TOP_LEVEL_DOMAIN',
        'URL_MALFORMED',
        'URL_NO_HOST',
        'URL_HOST_NAME_TOO_LONG',
        'URL_NO_SCHEME',
        'URL_NO_TOP_LEVEL_DOMAIN',
        'URL_PATH_NOT_ALLOWED',
        'URL_PORT_NOT_ALLOWED',
        'URL_QUERY_NOT_ALLOWED',
        'USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE',
        'INVALID_FORMAT',
        'ELEMENT_NOT_PRESENT',
        'IMAGE_ERROR',
        'VALUE_NOT_IN_RANGE',
        'FIELD_NOT_PRESENT',
        'ADDRESS_NOT_COMPLETE',
        'ADDRESS_INVALID',
        'VIDEO_RETRIEVAL_ERROR',
        'AUDIO_ERROR',
        'INVALID_YOUTUBE_DISPLAY_URL',
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