<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Gender extends Criterion
{
    /**
     * This field can be selected using the value &quot;GenderType&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\GenderGenderType
     */
    public $genderType;
}