<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\SearchParameter;


class LocationSearchParameter extends SearchParameter
{
    /**
     * A List of {@link Location}s indicating the desired countries being targeted
     * in the results.
     * The maximum size of this collection is 300.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field must contain at least one element.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Location
     */
    public $locations;
}