<?php

namespace AdWords\cm\v201109;



class OrderBy 
{
    /**
     * The field to sort the results on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $field;
    /**
     * The order to sort the results on. The default sort order is {@link SortOrder#ASCENDING}.
     * @var \AdWords\cm\v201109\SortOrder
     */
    public $sortOrder;

    public function __construct($field = null, $sortOrder = null)
    {
        $this->field = $field;
        $this->sortOrder = $sortOrder;
    }
}