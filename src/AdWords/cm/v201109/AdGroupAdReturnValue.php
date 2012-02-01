<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ListReturnValue;


class AdGroupAdReturnValue extends ListReturnValue
{
    /**
     * List of ads in an ad group.
     * @var \AdWords\cm\v201109\AdGroupAd
     */
    public $value;
    /**
     * @var \AdWords\cm\v201109\ApiError
     */
    public $partialFailureErrors;
}