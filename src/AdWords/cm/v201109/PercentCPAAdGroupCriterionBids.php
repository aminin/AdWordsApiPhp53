<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterionBids;


class PercentCPAAdGroupCriterionBids extends AdGroupCriterionBids
{
    /**
     * Percent CPA set for this criterion, used for calculating the bid value.
     * To disable this criterion-level parameter and use the ad group&#039;s percentCPA,
     * set this to 0.
     * This field can be selected using the value &quot;PercentCpa&quot;.This field can be filtered on.
     * This field must be greater than or equal to 0.
     * @var string
     */
    public $percentCpa;
    /**
     * The level (ad group or criterion) at which this parameter was set.
     * This field can be selected using the value &quot;PercentCpaBidSource&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\BidSource
     */
    public $source;
}