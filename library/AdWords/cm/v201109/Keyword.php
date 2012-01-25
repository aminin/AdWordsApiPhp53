<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Keyword extends Criterion
{
    /**
     * Text of this keyword (at most 80 characters and ten words).
     * This field can be selected using the value &quot;KeywordText&quot;.This field can be filtered on.
     * This string must match the regular expression &#039;[^\x00]*&#039;
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var string
     */
    public $text;
    /**
     * Match type of this keyword.
     * This field can be selected using the value &quot;KeywordMatchType&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\KeywordMatchType
     */
    public $matchType;
}