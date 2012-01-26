<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class AdGroupCriterionOperation extends Operation
{
    /**
     * The adgroup criterion being operated on.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\AdGroupCriterion
     */
    public $operand;
    /**
     * List of exemption requests for policy violations flagged by this criterion.
     * 
     * Only set this field when adding criteria that trigger policy violations
     * for which you wish to get exemptions for.
     * @var \AdWords\cm\v201109\ExemptionRequest
     */
    public $exemptionRequests;
}