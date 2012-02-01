<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class PercentCPAAdGroupBids extends AdGroupBids
{
    /**
     * Percent CPA set for this ad group, used for calculating the bid value.
     * This field can be selected using the value &quot;PercentCpa&quot;.This field can be filtered on.
     * @var string
     */
    public $percentCpa;
}