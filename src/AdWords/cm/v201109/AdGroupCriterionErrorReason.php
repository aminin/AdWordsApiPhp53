<?php

namespace AdWords\cm\v201109;



class AdGroupCriterionErrorReason
{
    /**
     * The valid field combinations to set in AdGroupCriterionIdFilter are:
     * campaignId only, adGroupId only, criterionId only,
     * and combination of (adGroupId, criterionId).
     */
    const CHOICE_INVALID_ID_FILTER_TYPE = 'INVALID_ID_FILTER_TYPE';
    /**
     * We require the list of AdGroupCriterionIdFilters all have the
     * same set of the fields set.  E.g, if one filter has only campaignId
     * set, but another has only adGroupId set, then this error gets triggered.
     * ID_FILTERS_HAVE_DIFF_FIELDS_SET,
     */
    const CHOICE_ID_FILTERS_HAVE_DIFF_FIELDS_SET = 'ID_FILTERS_HAVE_DIFF_FIELDS_SET';
    /**
     * When selecting negative criteria, filters may not be
     * applied to biddable criteria.
     */
    const CHOICE_INAPPLICABLE_FOR_NEGATIVE = 'INAPPLICABLE_FOR_NEGATIVE';
    /**
     * One or more filters specified are not applicable.
     */
    const CHOICE_INAPPLICABLE_FILTER_SPECIFIED = 'INAPPLICABLE_FILTER_SPECIFIED';
    /**
     * Too many operations for a single call.
     */
    const CHOICE_TOO_MANY_OPERTAIONS = 'TOO_MANY_OPERTAIONS';
    /**
     * Negative ad group criteria are not updateable.
     */
    const CHOICE_CANT_UPDATE_NEGATIVE = 'CANT_UPDATE_NEGATIVE';
    /**
     * The wrong type (for the operation) was used. For example, if attempting
     * to update an AdGroupCriterion of an existing adgroup but with a
     * different biddability.
     */
    const CHOICE_TYPE_MISMATCH = 'TYPE_MISMATCH';
    /**
     * Concrete type of criterion (keyword v.s. placement) is required for
     * ADD and SET operations.
     */
    const CHOICE_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
    /**
     * Bid is incompatible with ad group&#039;s bidding settings.
     */
    const CHOICE_BID_INCOMPATIBLE_WITH_ADGROUP = 'BID_INCOMPATIBLE_WITH_ADGROUP';
    const CHOICE_NETWORK_NOT_OVERRIDABLE = 'NETWORK_NOT_OVERRIDABLE';
    /**
     * There is a mismatch between the given bid&#039;s currency and the account&#039;s
     * currency.
     */
    const CHOICE_CURRENCY_MISMATCH = 'CURRENCY_MISMATCH';
    /**
     * Tried to do an operation for a targeted criterion.
     */
    const CHOICE_CRITERION_NOT_TARGETED = 'CRITERION_NOT_TARGETED';
    /**
     * Cannot target and exclude the same criterion at once.
     */
    const CHOICE_CANNOT_TARGET_AND_EXCLUDE = 'CANNOT_TARGET_AND_EXCLUDE';
    /**
     * The URL of a placement is invalid.
     */
    const CHOICE_ILLEGAL_URL = 'ILLEGAL_URL';
    /**
     * The path specified for the vertical is invalid.
     */
    const CHOICE_INVALID_VERTICAL_PATH = 'INVALID_VERTICAL_PATH';
    /**
     * Adding a criterion to an ad group would result in that criterion not having
     * an effective bid under that ad group.
     */
    const CHOICE_NO_EFFECTIVE_BID_FOR_THIS_CRITERION = 'NO_EFFECTIVE_BID_FOR_THIS_CRITERION';
    /**
     * Keyword text was invalid.
     */
    const CHOICE_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
    /**
     * Destination URL was invalid.
     */
    const CHOICE_INVALID_DESTINATION_URL = 'INVALID_DESTINATION_URL';
    /**
     * Keyword-level cpm bid is not supported
     */
    const CHOICE_KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM = 'KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM';
    /**
     * For example, cannot add deleted biddable ad group criterion.
     */
    const CHOICE_INVALID_USER_STATUS = 'INVALID_USER_STATUS';
    /**
     * Criteria type can not be targeted for the campaign by the customer.
     * like AOL account type cannot target site type criteria
     */
    const CHOICE_CANNOT_ADD_CRITERIA_TYPE = 'CANNOT_ADD_CRITERIA_TYPE';
    /**
     * Criteria type can not be targeted for the campaign by the customer.
     * like Product criteria type cannot be excluded
     */
    const CHOICE_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
    /**
     * Product filter in the product criteria is translated to a string as
     * operand1==argument1&amp;+operand2==argument2, Maximum allowed length for
     * the string is 255 chars.
     */
    const CHOICE_PRODUCT_FILTER_TOO_LONG = 'PRODUCT_FILTER_TOO_LONG';
    /**
     * Product filter in the product criteria is has invalid characters,
     * Operand and the argument in the filter can not have &quot;==&quot; or &quot;&amp;+&quot;.
     */
    const CHOICE_INVALID_PRODUCT_FILTER = 'INVALID_PRODUCT_FILTER';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'INVALID_ID_FILTER_TYPE',
        'ID_FILTERS_HAVE_DIFF_FIELDS_SET',
        'INAPPLICABLE_FOR_NEGATIVE',
        'INAPPLICABLE_FILTER_SPECIFIED',
        'TOO_MANY_OPERTAIONS',
        'CANT_UPDATE_NEGATIVE',
        'TYPE_MISMATCH',
        'CONCRETE_TYPE_REQUIRED',
        'BID_INCOMPATIBLE_WITH_ADGROUP',
        'NETWORK_NOT_OVERRIDABLE',
        'CURRENCY_MISMATCH',
        'CRITERION_NOT_TARGETED',
        'CANNOT_TARGET_AND_EXCLUDE',
        'ILLEGAL_URL',
        'INVALID_VERTICAL_PATH',
        'NO_EFFECTIVE_BID_FOR_THIS_CRITERION',
        'INVALID_KEYWORD_TEXT',
        'INVALID_DESTINATION_URL',
        'KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM',
        'INVALID_USER_STATUS',
        'CANNOT_ADD_CRITERIA_TYPE',
        'CANNOT_EXCLUDE_CRITERIA_TYPE',
        'PRODUCT_FILTER_TOO_LONG',
        'INVALID_PRODUCT_FILTER',
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