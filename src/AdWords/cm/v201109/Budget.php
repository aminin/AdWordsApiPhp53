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
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}