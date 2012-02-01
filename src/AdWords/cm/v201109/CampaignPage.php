<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Page;


class CampaignPage extends Page
{
    /**
     * The total budget.
     * @var \AdWords\cm\v201109\Budget
     */
    public $totalBudget;
    /**
     * The result entries in this page.
     * @var \AdWords\cm\v201109\Campaign
     */
    public $entries;
}