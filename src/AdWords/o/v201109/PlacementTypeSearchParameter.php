<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class PlacementTypeSearchParameter extends SearchParameter
{
    /**
     * A Set of {@link PlacementType}s representing the types of sites in which
     * ideas must appear.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\SiteConstantsPlacementType
     */
    public $placementTypes;
}