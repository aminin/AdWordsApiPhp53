<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class RelatedToUrlSearchParameter extends SearchParameter
{
    /**
     * A set of URL strings to which search results should be related. For
     * {@code PLACEMENT} queries, up to five URLs may be submitted. For
     * {@code KEYWORD} queries, only one URL may be submitted.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $urls;
    /**
     * Whether to crawl links off of the {@code urls} for the same domain.
     * Default is {@code false}.  Ignored on {@code KEYWORD} queries,
     * @var string
     */
    public $includeSubUrls;
}