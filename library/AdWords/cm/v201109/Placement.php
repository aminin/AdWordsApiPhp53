<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Placement extends Criterion
{
    /**
     * Url of the placement.
     * 
     * For example, &quot;http://www.domain.com&quot;.
     * This field can be selected using the value &quot;PlacementUrl&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var string
     */
    public $url;
}