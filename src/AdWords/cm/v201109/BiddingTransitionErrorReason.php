<?php

namespace AdWords\cm\v201109;



class BiddingTransitionErrorReason
{
    /**
     * Transition is not allowed since Bid to position is enabled.
     */
    const CHOICE_BID_TO_POSITION_ENABLED = 'BID_TO_POSITION_ENABLED';
    /**
     * Bidding strategy is not available for the account type.
     */
    const CHOICE_BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
    /**
     * Transition is not allowed for budget optimizer campaign.
     */
    const CHOICE_BUDGET_OPTIMIZER_IS_ENABLED = 'BUDGET_OPTIMIZER_IS_ENABLED';
    /**
     * Transition is not allowed for conversion optimizer campaign.
     */
    const CHOICE_CONVERSION_OPTIMIZER_IS_ENABLED = 'CONVERSION_OPTIMIZER_IS_ENABLED';
    /**
     * Conversion tracking is not enabled for the campaign for
     * VBB transition.
     */
    const CHOICE_CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';
    /**
     * Conversion tracking is not available for the account type.
     */
    const CHOICE_CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
    /**
     * Disable position preference by setting the position preference off on Campaign.
     */
    const CHOICE_USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE = 'USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE';
    /**
     * Explicit bid is invalid for the transition
     */
    const CHOICE_INVALID_BID = 'INVALID_BID';
    /**
     * Cannot set explicit bid for adgroups for transition
     * e.g. ManualCPC from BudgetOptimizer, it takes the proxy bids.
     */
    const CHOICE_CANNOT_SET_EXPLICIT_BID = 'CANNOT_SET_EXPLICIT_BID';
    /**
     * Explicit bid is required for bidding transition
     * e.g. ManualCPC  ManualCPM
     */
    const CHOICE_EXPLICIT_BID_REQUIRED_FOR_TRANSITION = 'EXPLICIT_BID_REQUIRED_FOR_TRANSITION';
    /**
     * Explicit bid specified for the bidding transition should match the
     * bidding strategy, the campaign is transitioning to.
     */
    const CHOICE_EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY = 'EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY';
    /**
     * The required bid for transition is missing
     */
    const CHOICE_MISSING_REQUIRED_BID = 'MISSING_REQUIRED_BID';
    /**
     * Campaign has invalid status, it is deleted or suggested
     */
    const CHOICE_INVALID_STATUS = 'INVALID_STATUS';
    /**
     * Transition is not allowed since campaign is a CPM campaign.
     */
    const CHOICE_IS_CPM_CAMPAIGN = 'IS_CPM_CAMPAIGN';
    /**
     * Transition is not allowed since campaign is a percent CPA campaign.
     */
    const CHOICE_IS_PERCENT_CPA_CAMPAIGN = 'IS_PERCENT_CPA_CAMPAIGN';
    /**
     * In case of budget optimizer, the only transition allowed is a switch to the
     * previous strategy.
     */
    const CHOICE_NOT_THE_PREVIOUS_BIDDING_STRATEGY = 'NOT_THE_PREVIOUS_BIDDING_STRATEGY';
    /**
     * Not enough right kind of data required for conversion or not enough data
     * in last 3 days suggesting the campaign is not stable enough to enter
     * into conversion optimizer.
     */
    const CHOICE_NOT_ENOUGH_CONVERSION_DATA = 'NOT_ENOUGH_CONVERSION_DATA';
    /**
     * Not enough conversions tracked for VBB transitions.
     */
    const CHOICE_NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';
    /**
     * Campaign is on search network - so can not switch to CPM.
     */
    const CHOICE_OPTED_IN_SEARCH = 'OPTED_IN_SEARCH';
    /**
     * Proxy bidding is on.
     */
    const CHOICE_PROXY_BIDDING_ON = 'PROXY_BIDDING_ON';
    /**
     * Can not switch to manual CPC if campaign allows site remnant
     * reservation bid type.
     */
    const CHOICE_SITE_REMNANT_RESERVATION_ALLOWED = 'SITE_REMNANT_RESERVATION_ALLOWED';
    /**
     * Transition to itself is not allowed.
     */
    const CHOICE_TRANSITION_TO_ITSELF = 'TRANSITION_TO_ITSELF';
    /**
     * Unknown Bidding strategy
     */
    const CHOICE_UNKNOWN_BIDDING_STRATEGY = 'UNKNOWN_BIDDING_STRATEGY';
    /**
     * Transition is not supported.
     */
    const CHOICE_UNSUPPORTED_TRANSITION = 'UNSUPPORTED_TRANSITION';
    /**
     * Transition not allowed since VCG is enabled.
     */
    const CHOICE_VCG_ENABLED = 'VCG_ENABLED';
    /**
     * Bidding transition failed. This is a default bidding transition error in case no
     * other error matches. Please use a specific error.
     */
    const CHOICE_BIDDING_TRANSITION_FAILED = 'BIDDING_TRANSITION_FAILED';
    /**
     * Accelerated delivery method is not supported for budget optimizer.
     */
    const CHOICE_ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER = 'ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER';
    /**
     * Bidding transition is prohibited for campaigns having an active experiment
     */
    const CHOICE_HAS_ACTIVE_EXPERIMENT = 'HAS_ACTIVE_EXPERIMENT';
    /**
     * Target bidding strategy is incompatible with a campaign setting.
     */
    const CHOICE_INCOMPATIBLE_WITH_CAMPAIGN_SETTING = 'INCOMPATIBLE_WITH_CAMPAIGN_SETTING';

    private $_validValues = array(
        'BID_TO_POSITION_ENABLED',
        'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE',
        'BUDGET_OPTIMIZER_IS_ENABLED',
        'CONVERSION_OPTIMIZER_IS_ENABLED',
        'CONVERSION_TRACKING_NOT_ENABLED',
        'CONVERSION_TRACKING_NOT_AVAILABLE_FOR_ACCOUNT_TYPE',
        'USE_POSITION_PREFERENCE_IN_MANUALCPC_INSTEAD_TO_DISABLE_POSITION_PREFERENCE',
        'INVALID_BID',
        'CANNOT_SET_EXPLICIT_BID',
        'EXPLICIT_BID_REQUIRED_FOR_TRANSITION',
        'EXPLICIT_BID_TYPE_DOES_NOT_MATCH_CAMPAIGN_BIDDING_STRATEGY',
        'MISSING_REQUIRED_BID',
        'INVALID_STATUS',
        'IS_CPM_CAMPAIGN',
        'IS_PERCENT_CPA_CAMPAIGN',
        'NOT_THE_PREVIOUS_BIDDING_STRATEGY',
        'NOT_ENOUGH_CONVERSION_DATA',
        'NOT_ENOUGH_CONVERSIONS',
        'OPTED_IN_SEARCH',
        'PROXY_BIDDING_ON',
        'SITE_REMNANT_RESERVATION_ALLOWED',
        'TRANSITION_TO_ITSELF',
        'UNKNOWN_BIDDING_STRATEGY',
        'UNSUPPORTED_TRANSITION',
        'VCG_ENABLED',
        'BIDDING_TRANSITION_FAILED',
        'ACCELERATED_DELIVERY_NOT_SUPPORTED_FOR_BUDGET_OPTIMIZER',
        'HAS_ACTIVE_EXPERIMENT',
        'INCOMPATIBLE_WITH_CAMPAIGN_SETTING',
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