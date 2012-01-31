<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class CompetitionSearchParameter extends SearchParameter
{
    /**
     * A set of {@link Level}s indicating a relative amount of competition that
     * {@code KEYWORD} {@link IdeaType}s should have in the  results.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\CompetitionSearchParameterLevel
     */
    public $levels;
}