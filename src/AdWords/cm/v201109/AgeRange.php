<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class AgeRange extends Criterion
{
    /**
     * This field can be selected using the value &quot;AgeRangeType&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\AgeRangeAgeRangeType
     */
    public $ageRangeType;
}