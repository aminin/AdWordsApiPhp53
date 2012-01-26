<?php

namespace AdWords\cm\v201109;



class CampaignCriterionErrorReason
{
    /**
     * The operation would result in more campaign criteria than allowed.
     */
    const CHOICE_CRITERIA_QUOTA_EXCEEDED = 'CRITERIA_QUOTA_EXCEEDED';
    /**
     * Concrete type of criterion (keyword v.s. placement) is required for
     * ADD and SET operations.
     */
    const CHOICE_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
    /**
     * Id filters have different combinations of field settings (they
     * should all be the same).
     */
    const CHOICE_ID_FILTERS_HAVE_DIFF_FIELDS_SET = 'ID_FILTERS_HAVE_DIFF_FIELDS_SET';
    /**
     * The category requested for exclusion is invalid.
     */
    const CHOICE_INVALID_EXCLUDED_CATEGORY = 'INVALID_EXCLUDED_CATEGORY';
    /**
     * Invalid keyword criteria text.
     */
    const CHOICE_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
    /**
     * Invalid placement URL.
     */
    const CHOICE_INVALID_PLACEMENT_URL = 'INVALID_PLACEMENT_URL';
    /**
     * Invalid vertical path
     */
    const CHOICE_INVALID_VERTICAL_PATH = 'INVALID_VERTICAL_PATH';
    /**
     * Cannot exclude all platforms.
     */
    const CHOICE_CANNOT_EXCLUDE_ALL_PLATFORMS = 'CANNOT_EXCLUDE_ALL_PLATFORMS';
    /**
     * Criteria type can not be excluded for the campaign by the customer.
     * like AOL account type cannot target site type criteria
     */
    const CHOICE_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
    /**
     * Cannot exclude platform criterion, i.e. this platform criterion has been already excluded.
     */
    const CHOICE_CANNOT_EXCLUDE_PLATFORM_CRITERION = 'CANNOT_EXCLUDE_PLATFORM_CRITERION';
    /**
     * The #mutate operation contained too many operations.
     */
    const CHOICE_TOO_MANY_OPERTAIONS = 'TOO_MANY_OPERTAIONS';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CRITERIA_QUOTA_EXCEEDED',
        'CONCRETE_TYPE_REQUIRED',
        'ID_FILTERS_HAVE_DIFF_FIELDS_SET',
        'INVALID_EXCLUDED_CATEGORY',
        'INVALID_KEYWORD_TEXT',
        'INVALID_PLACEMENT_URL',
        'INVALID_VERTICAL_PATH',
        'CANNOT_EXCLUDE_ALL_PLATFORMS',
        'CANNOT_EXCLUDE_CRITERIA_TYPE',
        'CANNOT_EXCLUDE_PLATFORM_CRITERION',
        'TOO_MANY_OPERTAIONS',
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