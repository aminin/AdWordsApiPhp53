<?php

namespace AdWords\cm\v201109;



class CriterionType
{
    /**
     * Content label for exclusion
     */
    const CHOICE_CONTENT_LABEL = 'CONTENT_LABEL';
    /**
     * Keyword. e.g. &#039;mars cruise&#039;
     */
    const CHOICE_KEYWORD = 'KEYWORD';
    /**
     * Placement. aka Website. e.g. &#039;www.flowers4sale.com&#039;
     */
    const CHOICE_PLACEMENT = 'PLACEMENT';
    /**
     * Vertical, e.g. &#039;category::Animals&gt;Pets&#039;  This is for vertical targeting on the content
     * network.
     */
    const CHOICE_VERTICAL = 'VERTICAL';
    /**
     * User lists, are links to sets of users defined by the advertiser.
     */
    const CHOICE_USER_LIST = 'USER_LIST';
    /**
     * User interests, categories of interests the user is interested in.
     */
    const CHOICE_USER_INTEREST = 'USER_INTEREST';
    /**
     * Filter for products the advertiser wants to target.
     */
    const CHOICE_PRODUCT = 'PRODUCT';
    /**
     * Languages to target.
     */
    const CHOICE_LANGUAGE = 'LANGUAGE';
    /**
     * Geographic regions to target.
     */
    const CHOICE_LOCATION = 'LOCATION';
    /**
     * Age Range to exclude.
     */
    const CHOICE_AGE_RANGE = 'AGE_RANGE';
    /**
     * Mobile carriers to target.
     */
    const CHOICE_CARRIER = 'CARRIER';
    /**
     * Mobile operating system versions to target.
     */
    const CHOICE_OPERATING_SYSTEM_VERSION = 'OPERATING_SYSTEM_VERSION';
    /**
     * Gender to exclude.
     */
    const CHOICE_GENDER = 'GENDER';
    /**
     * Polygon area to target.
     */
    const CHOICE_POLYGON = 'POLYGON';
    /**
     * Proximity (area within a radius) to target.
     */
    const CHOICE_PROXIMITY = 'PROXIMITY';
    /**
     * Platforms to target.
     */
    const CHOICE_PLATFORM = 'PLATFORM';
    /**
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CONTENT_LABEL',
        'KEYWORD',
        'PLACEMENT',
        'VERTICAL',
        'USER_LIST',
        'USER_INTEREST',
        'PRODUCT',
        'LANGUAGE',
        'LOCATION',
        'AGE_RANGE',
        'CARRIER',
        'OPERATING_SYSTEM_VERSION',
        'GENDER',
        'POLYGON',
        'PROXIMITY',
        'PLATFORM',
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