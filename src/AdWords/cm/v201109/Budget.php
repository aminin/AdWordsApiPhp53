<?php

namespace AdWords\cm\v201109;



class Budget 
{
    /**
     * Period over which to spend the budget. MONTHLY is not available to most users.
     * This field can be selected using the value &quot;Period&quot;.
     * @var \AdWords\cm\v201109\BudgetBudgetPeriod
     */
    public $period;
    /**
     * Amount of budget in the local currency for the account.
     * This field can be selected using the value &quot;Amount&quot;.This field can be filtered on.
     * This field must be greater than or equal to 1.
     * @var \AdWords\cm\v201109\Money
     */
    public $amount;
    /**
     * Delivery method for the budget.
     * This field can be selected using the value &quot;DeliveryMethod&quot;.
     * @var \AdWords\cm\v201109\BudgetBudgetDeliveryMethod
     */
    public $deliveryMethod;

    public function __construct($period = null, $amount = null, $deliveryMethod = null)
    {
        $this->period = $period;
        $this->amount = $amount;
        $this->deliveryMethod = $deliveryMethod;
    }
}