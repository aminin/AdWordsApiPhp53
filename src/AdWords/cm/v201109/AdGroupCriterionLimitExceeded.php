<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\EntityCountLimitExceeded;


class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded
{
    /**
     * @var \AdWords\cm\v201109\AdGroupCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;
}