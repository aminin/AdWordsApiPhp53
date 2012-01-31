<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class AverageTargetedMonthlySearchesSearchParameter extends SearchParameter
{
    /**
     * Used to specify the range of Average Targeted Monthly Searches.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\LongComparisonOperation
     */
    public $operation;
}