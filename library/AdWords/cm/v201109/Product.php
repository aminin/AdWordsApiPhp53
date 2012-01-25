<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Product extends Criterion
{
    /**
     * Product filter conditions. The condition in the product criteria is
     * defined as {operand1=argument1,operand2=argument2}.
     * The product conditions are anded to evaluate the targeting parameter.
     * {@code null} conditions means that all products are targeted.
     * @var \AdWords\cm\v201109\ProductCondition
     */
    public $conditions;
    /**
     * Product criteria parameter
     * This field can be selected using the value &quot;Text&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $text;
}