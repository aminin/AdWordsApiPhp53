<?php

namespace AdWords\cm\v201109;



class ProductConditionOperand 
{
    /**
     * Only following values are allowed as Operand :
     * product_type
     * brand
     * adwords_grouping
     * condition
     * adwords_labels
     * This field can be selected using the value &quot;Operand&quot;.
     * This field is required and should not be {@code null}.
     * This string must not be empty.
     * @var string
     */
    public $operand;

    public function __construct($operand = null)
    {
        $this->operand = $operand;
    }
}