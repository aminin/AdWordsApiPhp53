<?php

namespace AdWords\cm\v201109;



class BudgetErrorReason
{
    /**
     * Default budget error.
     */
    const CHOICE_BUDGET_ERROR = 'BUDGET_ERROR';
    /**
     * Customer is not whitelisted for this budget period.
     */
    const CHOICE_BUDGET_PERIOD_NOT_AVAILABLE = 'BUDGET_PERIOD_NOT_AVAILABLE';
    /**
     * A money amount was not in the expected currency.
     */
    const CHOICE_MONEY_AMOUNT_IN_WRONG_CURRENCY = 'MONEY_AMOUNT_IN_WRONG_CURRENCY';
    /**
     * A money amount was less than the minimum CPC for currency.
     */
    const CHOICE_MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC = 'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC';
    /**
     * A money amount was less than the maximum ad group CPM.
     */
    const CHOICE_MONEY_AMOUNT_LESS_THAN_MAXIMUM_AD_GROUP_CPM = 'MONEY_AMOUNT_LESS_THAN_MAXIMUM_AD_GROUP_CPM';
    /**
     * A money amount was less than the maximum site CPM.
     */
    const CHOICE_MONEY_AMOUNT_LESS_THAN_MAXIMUM_SITE_CPM = 'MONEY_AMOUNT_LESS_THAN_MAXIMUM_SITE_CPM';
    /**
     * A money amount was less than the minimum ad group CPC.
     */
    const CHOICE_MONEY_AMOUNT_LESS_THAN_MINIMUM_AD_GROUP_CPC = 'MONEY_AMOUNT_LESS_THAN_MINIMUM_AD_GROUP_CPC';
    /**
     * A money amount was less than the minimum criteria CPC.
     */
    const CHOICE_MONEY_AMOUNT_LESS_THAN_MINIMUM_CRITERIA_CPC = 'MONEY_AMOUNT_LESS_THAN_MINIMUM_CRITERIA_CPC';
    /**
     * A money amount was greater than the maximum allowed.
     */
    const CHOICE_MONEY_AMOUNT_TOO_LARGE = 'MONEY_AMOUNT_TOO_LARGE';
    /**
     * A money amount was negative.
     */
    const CHOICE_NEGATIVE_MONEY_AMOUNT = 'NEGATIVE_MONEY_AMOUNT';
    /**
     * A money amount was not a multiple of a minimum unit.
     */
    const CHOICE_NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT = 'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT';
    /**
     * Invalid budget schedule
     */
    const CHOICE_INVALID_BUDGET_SCHEDULE = 'INVALID_BUDGET_SCHEDULE';

    private $_validValues = array(
        'BUDGET_ERROR',
        'BUDGET_PERIOD_NOT_AVAILABLE',
        'MONEY_AMOUNT_IN_WRONG_CURRENCY',
        'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC',
        'MONEY_AMOUNT_LESS_THAN_MAXIMUM_AD_GROUP_CPM',
        'MONEY_AMOUNT_LESS_THAN_MAXIMUM_SITE_CPM',
        'MONEY_AMOUNT_LESS_THAN_MINIMUM_AD_GROUP_CPC',
        'MONEY_AMOUNT_LESS_THAN_MINIMUM_CRITERIA_CPC',
        'MONEY_AMOUNT_TOO_LARGE',
        'NEGATIVE_MONEY_AMOUNT',
        'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT',
        'INVALID_BUDGET_SCHEDULE',
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