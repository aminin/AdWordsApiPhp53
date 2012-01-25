<?php

namespace AdWords\cm\v201109;



class BiddingErrorReason
{
    /**
     * Bid amount can not be null.
     */
    const CHOICE_BID_AMOUNT_REQUIRED = 'BID_AMOUNT_REQUIRED';
    /**
     * Bid amount is too small.
     */
    const CHOICE_BID_TOO_SMALL = 'BID_TOO_SMALL';
    /**
     * Bid amount is too big.
     */
    const CHOICE_BID_TOO_BIG = 'BID_TOO_BIG';
    /**
     * Bid has too many fractional digit precision.
     */
    const CHOICE_BID_TOO_MANY_FRACTIONAL_DIGITS = 'BID_TOO_MANY_FRACTIONAL_DIGITS';
    /**
     * Bids must have a positive amount.
     */
    const CHOICE_NON_POSITIVE_BID = 'NON_POSITIVE_BID';
    /**
     * Bid is too high for the daily budget.
     */
    const CHOICE_BID_TOO_HIGH_FOR_DAILY_BUDGET = 'BID_TOO_HIGH_FOR_DAILY_BUDGET';
    /**
     * Bid is too high for the monthly budget.
     */
    const CHOICE_BID_TOO_HIGH_FOR_MONTHLY_BUDGET = 'BID_TOO_HIGH_FOR_MONTHLY_BUDGET';
    /**
     * Demographic targeting: Age 0-17 needs to be excluded for any other
     * age to get excluded
     */
    const CHOICE_MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS = 'MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS';
    /**
     * Not allowed to enable budget optimizer, for a campaign with no budget.
     */
    const CHOICE_CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER = 'CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER';
    /**
     * Not allowed to set content bid without setting the keyword bid.
     */
    const CHOICE_CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL = 'CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL';
    /**
     * Campaign can not be created with Conversion Optimizer bidding strategy.
     * It can be transitioned to conversion optimizer, once eligible.
     */
    const CHOICE_CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER = 'CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER';
    /**
     * Pay per conversion is not available to all the customer,
     * only few whitelisted customers can use this.
     */
    const CHOICE_PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER = 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER';
    /**
     * Pay per conversion is not allowed with Target CPA
     */
    const CHOICE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA = 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA';
    /**
     * Pay per conversion is not allowed with many per click
     */
    const CHOICE_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK = 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK';
    /**
     * Customer is not whitelisted to use target cpa
     */
    const CHOICE_TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER = 'TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER';
    /**
     * Customer is not whitelisted to use many per click
     */
    const CHOICE_MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER = 'MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER';
    /**
     * Site cpc bid can not be set
     */
    const CHOICE_CANNOT_SET_SITE_MAX_CPC = 'CANNOT_SET_SITE_MAX_CPC';
    /**
     * Default bidding related error
     */
    const CHOICE_BID_ERROR = 'BID_ERROR';

    private $_validValues = array(
        'BID_AMOUNT_REQUIRED',
        'BID_TOO_SMALL',
        'BID_TOO_BIG',
        'BID_TOO_MANY_FRACTIONAL_DIGITS',
        'NON_POSITIVE_BID',
        'BID_TOO_HIGH_FOR_DAILY_BUDGET',
        'BID_TOO_HIGH_FOR_MONTHLY_BUDGET',
        'MUST_EXCLUDE_0_TO_17_WITH_OTHER_AGE_EXCLUSIONS',
        'CAMPAIGN_MUST_HAVE_A_BUDGET_TO_ENABLE_BUDGET_OPTIMIZER',
        'CANNOT_SET_CONTENT_BID_WITHOUT_SETTING_KEYWORD_MAX_CPC_AS_WELL',
        'CANNOT_CREATE_CAMPAIGN_WITH_CONVERSION_OPTIMIZER',
        'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER',
        'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA',
        'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_MANY_PER_CLICK',
        'TARGET_CPA_NOT_AVAILABLE_FOR_CUSTOMER',
        'MANY_PER_CLICK_NOT_AVAILABLE_FOR_CUSTOMER',
        'CANNOT_SET_SITE_MAX_CPC',
        'BID_ERROR',
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