<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class ExcludedKeywordSearchParameter extends SearchParameter
{
    /**
     * A List of {@link Keyword}s to be excluded from the search results.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Keyword
     */
    public $keywords;
}