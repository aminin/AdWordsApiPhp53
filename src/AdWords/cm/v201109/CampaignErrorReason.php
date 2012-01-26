<?php

namespace AdWords\cm\v201109;



class CampaignErrorReason
{
    /**
     * A date was used that is past the system &quot;last&quot; date.
     */
    const CHOICE_AFTER_MAXIMUM_ALLOWABLE_DATE = 'AFTER_MAXIMUM_ALLOWABLE_DATE';
    /**
     * A complete campaign cannot go back to being incomplete
     */
    const CHOICE_CANNOT_GO_BACK_TO_INCOMPLETE = 'CANNOT_GO_BACK_TO_INCOMPLETE';
    /**
     * Trying to change start date on a campaign that has started.
     */
    const CHOICE_CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED';
    /**
     * An accelerated delivery method was specified for a budget optimizer campaign.
     */
    const CHOICE_CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN = 'CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN';
    /**
     * Trying to modify an end date before an active experiment end date.
     */
    const CHOICE_CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE = 'CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE';
    /**
     * Trying to modify a date into the past.
     */
    const CHOICE_CANNOT_SET_DATE_TO_PAST = 'CANNOT_SET_DATE_TO_PAST';
    /**
     * The campaign is not search targeted to enable position preference
     */
    const CHOICE_CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED = 'CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED';
    /**
     * A currency was specified other than the account currency.
     */
    const CHOICE_CURRENCY_NOT_VALID_FOR_ACCOUNT = 'CURRENCY_NOT_VALID_FOR_ACCOUNT';
    /**
     * Trying to modify name of campaign to one already assigned to another campaign.
     */
    const CHOICE_DUPLICATE_CAMPAIGN_NAME = 'DUPLICATE_CAMPAIGN_NAME';
    /**
     * Two fields are in conflicting modes.
     */
    const CHOICE_INCOMPATIBLE_CAMPAIGN_FIELD = 'INCOMPATIBLE_CAMPAIGN_FIELD';
    /**
     * Campaign name cannot be used.
     */
    const CHOICE_INVALID_CAMPAIGN_NAME = 'INVALID_CAMPAIGN_NAME';
    /**
     * Given status is invalid.
     */
    const CHOICE_INVALID_AD_SERVING_OPTIMIZATION_STATUS = 'INVALID_AD_SERVING_OPTIMIZATION_STATUS';
    /**
     * Customer keyword quota has been exceeded.
     */
    const CHOICE_KEYWORD_QUOTA_EXCEEDED = 'KEYWORD_QUOTA_EXCEEDED';
    /**
     * The maximum number of impressions for Frequency Cap should be an integer greater than 0.
     */
    const CHOICE_MAX_IMPRESSIONS_NOT_IN_RANGE = 'MAX_IMPRESSIONS_NOT_IN_RANGE';
    /**
     * The campaign start date was after the campaign end date.
     */
    const CHOICE_START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
    /**
     * Only the Day, Week and Month time units are supported.
     */
    const CHOICE_TIME_UNIT_NOT_SUPPORTED = 'TIME_UNIT_NOT_SUPPORTED';
    /**
     * Bidding strategy field was set to a value other than the current bidding
     * strategy of the campaign
     */
    const CHOICE_USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY = 'USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY';
    /**
     * Changing campaignType is not allowed
     */
    const CHOICE_CANNOT_CHANGE_CAMPAIGN_TYPE = 'CANNOT_CHANGE_CAMPAIGN_TYPE';
    /**
     * Operation not allowed on a campaign whose serving status has ended
     */
    const CHOICE_INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED';
    /**
     * Modifying TV Campaigns is not allowed
     */
    const CHOICE_CANNOT_CHANGE_TV_CAMPAIGN = 'CANNOT_CHANGE_TV_CAMPAIGN';
    /**
     * Cannot add a campaign with conversion optimizer turned on
     */
    const CHOICE_CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY = 'CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY';
    /**
     * FrequencyCap.timeUnit cannot be NULL
     */
    const CHOICE_FREQUENCY_CAP_TIME_UNIT_CANNOT_BE_NULL = 'FREQUENCY_CAP_TIME_UNIT_CANNOT_BE_NULL';
    /**
     * FrequencyCap.level cannot be NULL
     */
    const CHOICE_FREQUENCY_CAP_LEVEL_CANNOT_BE_NULL = 'FREQUENCY_CAP_LEVEL_CANNOT_BE_NULL';
    /**
     * Campaigns with percent cpa bidding strategy do not have budgets
     */
    const CHOICE_CANNOT_SET_BUDGET = 'CANNOT_SET_BUDGET';
    /**
     * Default error
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'AFTER_MAXIMUM_ALLOWABLE_DATE',
        'CANNOT_GO_BACK_TO_INCOMPLETE',
        'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED',
        'CANNOT_SET_ACCELERATED_DELIVERY_FOR_BUDGET_OPTIMIZER_CAMPAIGN',
        'CANNOT_SET_END_DATE_BEFORE_EXPERIMENT_END_DATE',
        'CANNOT_SET_DATE_TO_PAST',
        'CANNOT_SET_POSITION_PREFERENCE_IF_NOT_SEARCH_TARGETED',
        'CURRENCY_NOT_VALID_FOR_ACCOUNT',
        'DUPLICATE_CAMPAIGN_NAME',
        'INCOMPATIBLE_CAMPAIGN_FIELD',
        'INVALID_CAMPAIGN_NAME',
        'INVALID_AD_SERVING_OPTIMIZATION_STATUS',
        'KEYWORD_QUOTA_EXCEEDED',
        'MAX_IMPRESSIONS_NOT_IN_RANGE',
        'START_DATE_AFTER_END_DATE',
        'TIME_UNIT_NOT_SUPPORTED',
        'USE_BIDDING_TRANSITION_FIELD_INSTEAD_TO_SWITCH_BIDDING_STRATEGY',
        'CANNOT_CHANGE_CAMPAIGN_TYPE',
        'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED',
        'CANNOT_CHANGE_TV_CAMPAIGN',
        'CANNOT_ADD_CAMPAIGN_WITH_CONVERSION_OPTIMIZER_BIDDING_STRATEGY',
        'FREQUENCY_CAP_TIME_UNIT_CANNOT_BE_NULL',
        'FREQUENCY_CAP_LEVEL_CANNOT_BE_NULL',
        'CANNOT_SET_BUDGET',
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