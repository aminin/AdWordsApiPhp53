<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ListReturnValue;


class CampaignTargetReturnValue extends ListReturnValue
{
    /**
     * The list of TargetLists belonging to the current page.
     * @var \AdWords\cm\v201109\TargetList
     */
    public $value;
}