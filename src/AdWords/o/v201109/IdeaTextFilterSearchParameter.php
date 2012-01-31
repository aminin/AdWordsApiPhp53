<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class IdeaTextFilterSearchParameter extends SearchParameter
{
    /**
     * A set of strings specifying which ideas should be included in
     * the results.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var string
     */
    public $included;
    /**
     * A set of strings specifying which ideas should be excluded from
     * the results.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var string
     */
    public $excluded;
}