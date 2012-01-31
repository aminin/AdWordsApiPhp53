<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class KeywordMatchTypeSearchParameter extends SearchParameter
{
    /**
     * A Set of {@link KeywordMatchType}s that results must match. Results
     * need only match a single match type in the set.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\KeywordMatchType
     */
    public $keywordMatchTypes;
}