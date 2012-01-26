<?php

namespace AdWords\cm\v201109;



class Predicate 
{
    /**
     * The field by which to filter the returned data. Possible values are marked Filterable on
     * the entity&#039;s reference page. For example, for predicates for the
     * CampaignService {@link Selector selector}, refer to the filterable fields from the
     * {@link Campaign} reference page.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $field;
    /**
     * The operator to use for filtering the data returned.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\PredicateOperator
     */
    public $operator;
    /**
     * The values by which to filter the field. The {@link Operator#IN} and {@link
     * Operator#NOT_IN} take multiple values. All others take a single value.
     * This field must not contain {@code null} elements.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $values;

    public function __construct($field = null, $operator = null, $values = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }
}