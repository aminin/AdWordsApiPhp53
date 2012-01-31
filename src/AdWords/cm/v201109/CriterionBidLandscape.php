<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BidLandscape;


class CriterionBidLandscape extends BidLandscape
{
    /**
     * ID of the criterion associated with this landscape.
     * This field can be selected using the value &quot;CriterionId&quot;.This field can be filtered on.
     * @var string
     */
    public $criterionId;
}