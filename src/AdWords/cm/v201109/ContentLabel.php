<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class ContentLabel extends Criterion
{
    /**
     * Content label type
     * This field can be selected using the value &quot;ContentLabelType&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\ContentLabelType
     */
    public $contentLabelType;
}