<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\EntityCountLimitExceeded;


class CampaignCriterionLimitExceeded extends EntityCountLimitExceeded
{
    /**
     * @var \AdWords\cm\v201109\CampaignCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;
}