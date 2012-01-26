<?php

namespace AdWords\cm\v201109;



class ProductCondition 
{
    /**
     * Value of the product operand to comapare against
     * This field can be selected using the value &quot;Argument&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $argument;
    /**
     * Operand of product filter condition
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\ProductConditionOperand
     */
    public $operand;

    public function __construct($argument = null, $operand = null)
    {
        $this->argument = $argument;
        $this->operand = $operand;
    }
}