<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class CriterionUserInterest extends Criterion
{
    /**
     * Id of this user interest. This is a required field.
     * This field can be selected using the value &quot;UserInterestId&quot;.
     * @var string
     */
    public $userInterestId;
    /**
     * Name of this user interest.
     * This field can be selected using the value &quot;UserInterestName&quot;.
     * @var string
     */
    public $userInterestName;
}