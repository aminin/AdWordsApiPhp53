<?php

namespace AdWords\cm\v201109;



class TargetErrorReason
{
    /**
     * Cannot enable advanced ad scheduling for a conversion optimizer campaign.
     */
    const CHOICE_AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER = 'AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER';
    /**
     * Bid multiplier could not be parsed as a number; it was malformed.
     */
    const CHOICE_AD_SCHEDULE_BID_MULTIPLIER_MALFORMED = 'AD_SCHEDULE_BID_MULTIPLIER_MALFORMED';
    /**
     * Bid multiplier was too big.
     */
    const CHOICE_AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG';
    /**
     * Bid multiplier was too small.
     */
    const CHOICE_AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL';
    /**
     * Bid multiplier has too many decimal digits.
     */
    const CHOICE_AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS = 'AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS';
    /**
     * The number of intervals per day limit was exceeded.
     */
    const CHOICE_AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT';
    /**
     * The required times must be on or before the end of the week (Sunday at 11:45pm).
     */
    const CHOICE_AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK = 'AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK';
    /**
     * Cannot enable ad scheduling for the campaign.
     */
    const CHOICE_AD_SCHEDULE_INCOMPATIBILITY = 'AD_SCHEDULE_INCOMPATIBILITY';
    /**
     * Cannot enable ad scheduling for a budget optimizer campaign.
     */
    const CHOICE_AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER = 'AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER';
    /**
     * The start and end times are not on the same day.
     */
    const CHOICE_AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS';
    /**
     * Integer representation day of the week is not within proper range
     */
    const CHOICE_AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK = 'AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK';
    /**
     * The start time is not less than the end time.
     */
    const CHOICE_AD_SCHEDULE_INVALID_TIME_INTERVAL = 'AD_SCHEDULE_INVALID_TIME_INTERVAL';
    /**
     * Enabled ad schedule does not have at least one interval.
     */
    const CHOICE_AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED = 'AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED';
    /**
     * The required times must be a multiple of 15 minutes.
     */
    const CHOICE_AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES = 'AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES';
    /**
     * Two time intervals overlap each other.
     */
    const CHOICE_AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 'AD_SCHEDULE_TIME_INTERVALS_OVERLAP';
    /**
     * Cannot exclude city.
     */
    const CHOICE_CANNOT_EXCLUDE_CITY = 'CANNOT_EXCLUDE_CITY';
    /**
     * Cannot exclude a location that is not being targeted by an enclosing location.
     */
    const CHOICE_CANNOT_EXCLUDE_IF_NOT_TARGETED = 'CANNOT_EXCLUDE_IF_NOT_TARGETED';
    /**
     * Cannot exclude metro.
     */
    const CHOICE_CANNOT_EXCLUDE_METRO = 'CANNOT_EXCLUDE_METRO';
    /**
     * Cannot exclude province.
     */
    const CHOICE_CANNOT_EXCLUDE_PROVINCE = 'CANNOT_EXCLUDE_PROVINCE';
    /**
     * Cannot opt out from Google Search while position preference enabled.
     */
    const CHOICE_CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE = 'CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE';
    /**
     * Cannot target an age segment without targeting at least one gender segment.
     */
    const CHOICE_CANNOT_TARGET_AGE_WITHOUT_GENDER = 'CANNOT_TARGET_AGE_WITHOUT_GENDER';
    /**
     * Cannot target city.
     */
    const CHOICE_CANNOT_TARGET_CITY = 'CANNOT_TARGET_CITY';
    /**
     * Cannot cover content contextual without content network.
     */
    const CHOICE_CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK = 'CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK';
    /**
     * Cannot target country.
     */
    const CHOICE_CANNOT_TARGET_COUNTRY = 'CANNOT_TARGET_COUNTRY';
    /**
     * The requested network coverage modification is prohibited.
     */
    const CHOICE_CANNOT_TARGET_COVERAGE = 'CANNOT_TARGET_COVERAGE';
    /**
     * Cannot target a gender segment without targeting at least one age segment.
     */
    const CHOICE_CANNOT_TARGET_GENDER_WITHOUT_AGE = 'CANNOT_TARGET_GENDER_WITHOUT_AGE';
    /**
     * Cannot target Google Search network for a CPM campaign.
     */
    const CHOICE_CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN';
    /**
     * Specified language cannot be targeted.
     */
    const CHOICE_CANNOT_TARGET_LANGUAGE = 'CANNOT_TARGET_LANGUAGE';
    /**
     * Cannot target metro.
     */
    const CHOICE_CANNOT_TARGET_METRO = 'CANNOT_TARGET_METRO';
    /**
     * Specified Mobile carrier cannot be targeted
     */
    const CHOICE_CANNOT_TARGET_MOBILE_CARRIER = 'CANNOT_TARGET_MOBILE_CARRIER';
    /**
     * Cannot target province.
     */
    const CHOICE_CANNOT_TARGET_PROVINCE = 'CANNOT_TARGET_PROVINCE';
    /**
     * Cannot cover search syndication network without google search network.
     */
    const CHOICE_CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH = 'CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH';
    /**
     * Cannot target any syndicatable types.
     */
    const CHOICE_CANNOT_TARGET_SYNDICATABLE_TYPES = 'CANNOT_TARGET_SYNDICATABLE_TYPES';
    /**
     * Cannot target the same target list type twice.
     */
    const CHOICE_CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES = 'CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES';
    /**
     * The bid modifier of a demographic target should be in the [0, 500] range.
     */
    const CHOICE_DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500 = 'DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500';
    /**
     * A city could not be matched with the provided input.
     */
    const CHOICE_INVALID_CITY_CODE = 'INVALID_CITY_CODE';
    /**
     * CityName is too long.
     */
    const CHOICE_INVALID_CITYNAME_LENGTH = 'INVALID_CITYNAME_LENGTH';
    /**
     * Polygon targets cannot be excluded.
     */
    const CHOICE_INVALID_EXCLUDED_POLYGON_TARGET = 'INVALID_EXCLUDED_POLYGON_TARGET';
    /**
     * Proximity targets cannot be excluded
     */
    const CHOICE_INVALID_EXCLUDED_PROXIMITY_TARGET = 'INVALID_EXCLUDED_PROXIMITY_TARGET';
    /**
     * Language code specified is invalid.
     */
    const CHOICE_INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
    /**
     * Latitude supplied with the target is invalid.
     */
    const CHOICE_INVALID_LATITUDE = 'INVALID_LATITUDE';
    /**
     * Longitude supplied with the target is invalid.
     */
    const CHOICE_INVALID_LONGITUDE = 'INVALID_LONGITUDE';
    /**
     * Metro code specified is invalid.
     */
    const CHOICE_INVALID_METRO_CODE = 'INVALID_METRO_CODE';
    /**
     * Mobile Carrier specified is invalid.
     */
    const CHOICE_INVALID_MOBILE_CARRIER = 'INVALID_MOBILE_CARRIER';
    /**
     * Mobile Platform is invalid.
     */
    const CHOICE_INVALID_MOBILE_PLATFORM = 'INVALID_MOBILE_PLATFORM';
    /**
     * PostalCode is too long.
     */
    const CHOICE_INVALID_POSTALCODE_LENGTH = 'INVALID_POSTALCODE_LENGTH';
    /**
     * Province code specified is invalid.
     */
    const CHOICE_INVALID_PROVINCE_CODE = 'INVALID_PROVINCE_CODE';
    /**
     * Radius supplied with the proximity target is invalid.
     */
    const CHOICE_INVALID_PROXIMITY_RADIUS = 'INVALID_PROXIMITY_RADIUS';
    /**
     * RegionCode is too long.
     */
    const CHOICE_INVALID_REGIONCODE_LENGTH = 'INVALID_REGIONCODE_LENGTH';
    /**
     * RegionName is too long.
     */
    const CHOICE_INVALID_REGIONNAME_LENGTH = 'INVALID_REGIONNAME_LENGTH';
    /**
     * StreetAddress is too long.
     */
    const CHOICE_INVALID_STREETADDRESS_LENGTH = 'INVALID_STREETADDRESS_LENGTH';
    /**
     * Multiple occurrences of the same target were encountered.
     */
    const CHOICE_MULTIPLE_OCCURRENCES_OF_SAME_TARGET = 'MULTIPLE_OCCURRENCES_OF_SAME_TARGET';
    /**
     * A PolygonTarget point is duplicated.
     */
    const CHOICE_POLYGON_DUPLICATE_VERTICES = 'POLYGON_DUPLICATE_VERTICES';
    /**
     * A PolygonTarget has edges that intersect.
     */
    const CHOICE_POLYGON_EDGES_INTERSECT = 'POLYGON_EDGES_INTERSECT';
    /**
     * A PolygonTarget has too few vertices.
     */
    const CHOICE_POLYGON_TOO_FEW_VERTICES = 'POLYGON_TOO_FEW_VERTICES';
    /**
     * A polygonTarget has too many vertices. (more than 100)
     */
    const CHOICE_POLYGON_TOO_MANY_VERTICES = 'POLYGON_TOO_MANY_VERTICES';
    /**
     * A PolygonTarget is too large.
     */
    const CHOICE_POLYGON_TOO_LARGE = 'POLYGON_TOO_LARGE';
    /**
     * Cannot target a location that&#039;s enclosed in an already targeted location.
     */
    const CHOICE_TARGET_IS_ENCLOSED_BY_ANOTHER_TARGET = 'TARGET_IS_ENCLOSED_BY_ANOTHER_TARGET';
    /**
     * Cannot target a location that&#039;s being excluded by an enclosing location.
     */
    const CHOICE_TARGET_IS_EXCLUDED_BY_ANOTHER_TARGET = 'TARGET_IS_EXCLUDED_BY_ANOTHER_TARGET';
    /**
     * A validation error was encountered; however,
     * a more detailed TargetingValidationError usually has already been provided.
     */
    const CHOICE_TARGETING_VALIDATION_FAILED = 'TARGETING_VALIDATION_FAILED';
    /**
     * Region spanning multiple countries.
     */
    const CHOICE_TARGETING_CROSS_COUNTRY_REGIONAL = 'TARGETING_CROSS_COUNTRY_REGIONAL';
    /**
     * The given exclusion is not supported.
     */
    const CHOICE_TARGETING_EXCLUSION_NOT_SUPPORTED = 'TARGETING_EXCLUSION_NOT_SUPPORTED';
    /**
     * The location types are incompatible for targeting.
     */
    const CHOICE_TARGETING_INCOMPATIBLE_LOCATION_TYPES = 'TARGETING_INCOMPATIBLE_LOCATION_TYPES';
    /**
     * The targeting is not supported.
     */
    const CHOICE_TARGETING_NOT_SUPPORTED = 'TARGETING_NOT_SUPPORTED';
    /**
     * There are too many regions.
     */
    const CHOICE_TARGETING_TOO_MANY_REGIONS = 'TARGETING_TOO_MANY_REGIONS';
    /**
     * There are too many excluded locations.
     */
    const CHOICE_TOO_MANY_EXCLUDED_LOCATIONS = 'TOO_MANY_EXCLUDED_LOCATIONS';
    /**
     * There are too many targeted locations.
     */
    const CHOICE_TOO_MANY_TARGETED_LOCATIONS = 'TOO_MANY_TARGETED_LOCATIONS';
    /**
     * This is for warnings which is currently not being passed back to the client.
     */
    const CHOICE_WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL = 'WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL';
    /**
     * This is for warnings which is currently not being passed back to the client.
     */
    const CHOICE_WARNING_NOW_REQUIRES_CHINESE_APPROVAL = 'WARNING_NOW_REQUIRES_CHINESE_APPROVAL';
    /**
     * This is for warnings which is currently not being passed back to the client.
     */
    const CHOICE_WARNING_NOW_TARGETS_CHINA = 'WARNING_NOW_TARGETS_CHINA';
    /**
     * This is for warnings which is currently not being passed back to the client.
     */
    const CHOICE_WARNING_NOW_TARGETS_CHINESE = 'WARNING_NOW_TARGETS_CHINESE';
    /**
     * The target error is unknown.
     */
    const CHOICE_TARGET_ERROR = 'TARGET_ERROR';

    private $_validValues = array(
        'AD_SCHEDULE_ADVANCED_INCOMPATIBLE_WITH_CONVERSION_OPTIMIZER',
        'AD_SCHEDULE_BID_MULTIPLIER_MALFORMED',
        'AD_SCHEDULE_BID_MULTIPLIER_TOO_BIG',
        'AD_SCHEDULE_BID_MULTIPLIER_TOO_SMALL',
        'AD_SCHEDULE_BID_MULTIPLIER_TOO_MANY_FRACTION_DIGITS',
        'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT',
        'AD_SCHEDULE_EXCEEDS_PAST_END_OF_WEEK',
        'AD_SCHEDULE_INCOMPATIBILITY',
        'AD_SCHEDULE_INCOMPATIBLE_WITH_BUDGET_OPTIMIZER',
        'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS',
        'AD_SCHEDULE_INVALID_DAY_OF_THE_WEEK',
        'AD_SCHEDULE_INVALID_TIME_INTERVAL',
        'AD_SCHEDULE_NO_INTERVALS_WHILE_ENABLED',
        'AD_SCHEDULE_NOT_MULTIPLE_OF_15_MINUTES',
        'AD_SCHEDULE_TIME_INTERVALS_OVERLAP',
        'CANNOT_EXCLUDE_CITY',
        'CANNOT_EXCLUDE_IF_NOT_TARGETED',
        'CANNOT_EXCLUDE_METRO',
        'CANNOT_EXCLUDE_PROVINCE',
        'CANNOT_OPT_OUT_GOOGLE_SEARCH_WHILE_BID_TO_POSITION_ENABLE',
        'CANNOT_TARGET_AGE_WITHOUT_GENDER',
        'CANNOT_TARGET_CITY',
        'CANNOT_TARGET_CONTENT_CONTEXTUAL_WITHOUT_CONTENT_NETWORK',
        'CANNOT_TARGET_COUNTRY',
        'CANNOT_TARGET_COVERAGE',
        'CANNOT_TARGET_GENDER_WITHOUT_AGE',
        'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN',
        'CANNOT_TARGET_LANGUAGE',
        'CANNOT_TARGET_METRO',
        'CANNOT_TARGET_MOBILE_CARRIER',
        'CANNOT_TARGET_PROVINCE',
        'CANNOT_TARGET_SEARCH_SYNDICATION_WITHOUT_GOOGLE_SEARCH',
        'CANNOT_TARGET_SYNDICATABLE_TYPES',
        'CANNOT_TARGET_THE_SAME_TARGET_LIST_TYPE_MULTIPLE_TIMES',
        'DEMOGRAPHIC_BID_MODIFIER_SHOULD_BE_IN_BETWEEN_0_AND_500',
        'INVALID_CITY_CODE',
        'INVALID_CITYNAME_LENGTH',
        'INVALID_EXCLUDED_POLYGON_TARGET',
        'INVALID_EXCLUDED_PROXIMITY_TARGET',
        'INVALID_LANGUAGE_CODE',
        'INVALID_LATITUDE',
        'INVALID_LONGITUDE',
        'INVALID_METRO_CODE',
        'INVALID_MOBILE_CARRIER',
        'INVALID_MOBILE_PLATFORM',
        'INVALID_POSTALCODE_LENGTH',
        'INVALID_PROVINCE_CODE',
        'INVALID_PROXIMITY_RADIUS',
        'INVALID_REGIONCODE_LENGTH',
        'INVALID_REGIONNAME_LENGTH',
        'INVALID_STREETADDRESS_LENGTH',
        'MULTIPLE_OCCURRENCES_OF_SAME_TARGET',
        'POLYGON_DUPLICATE_VERTICES',
        'POLYGON_EDGES_INTERSECT',
        'POLYGON_TOO_FEW_VERTICES',
        'POLYGON_TOO_MANY_VERTICES',
        'POLYGON_TOO_LARGE',
        'TARGET_IS_ENCLOSED_BY_ANOTHER_TARGET',
        'TARGET_IS_EXCLUDED_BY_ANOTHER_TARGET',
        'TARGETING_VALIDATION_FAILED',
        'TARGETING_CROSS_COUNTRY_REGIONAL',
        'TARGETING_EXCLUSION_NOT_SUPPORTED',
        'TARGETING_INCOMPATIBLE_LOCATION_TYPES',
        'TARGETING_NOT_SUPPORTED',
        'TARGETING_TOO_MANY_REGIONS',
        'TOO_MANY_EXCLUDED_LOCATIONS',
        'TOO_MANY_TARGETED_LOCATIONS',
        'WARNING_MAY_NOW_REQUIRE_CHINESE_APPROVAL',
        'WARNING_NOW_REQUIRES_CHINESE_APPROVAL',
        'WARNING_NOW_TARGETS_CHINA',
        'WARNING_NOW_TARGETS_CHINESE',
        'TARGET_ERROR',
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