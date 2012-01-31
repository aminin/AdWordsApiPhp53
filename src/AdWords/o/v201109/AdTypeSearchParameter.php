<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class AdTypeSearchParameter extends SearchParameter
{
    /**
     * A set of {@linke AdType}s desired in the results. For example, specify
     * {@code DISPLAY} {@link AdType} to get {@code PLACEMENT} {@link IdeaType}s
     * that support display ads (independent of the ad size).
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\SiteConstantsAdType
     */
    public $adTypes;
}