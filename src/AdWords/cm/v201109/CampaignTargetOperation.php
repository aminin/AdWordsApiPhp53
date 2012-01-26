<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class CampaignTargetOperation extends Operation
{
    /**
     * Targets to be set.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\TargetList
     */
    public $operand;
}