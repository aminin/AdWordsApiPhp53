<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ListReturnValue;


class AdGroupCriterionReturnValue extends ListReturnValue
{
    /**
     * List of adgroup criteria.
     * @var \AdWords\cm\v201109\AdGroupCriterion
     */
    public $value;
    /**
     * List of partial failure errors.
     * @var \AdWords\cm\v201109\ApiError
     */
    public $partialFailureErrors;
}