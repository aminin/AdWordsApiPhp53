<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Location extends Criterion
{
    /**
     * Name of the location criterion.  Note: This field is filterable only in
     * LocationCriterionService.
     * This field can be selected using the value &quot;LocationName&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $locationName;
    /**
     * Display type of the location criterion.
     * This field can be selected using the value &quot;DisplayType&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $displayType;
    /**
     * Indicates if the location criterion is obsolete.
     * This field can be selected using the value &quot;IsObsolete&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $isObsolete;
    /**
     * Ordered list of parents of the location criterion.
     * This field can be selected using the value &quot;ParentLocations&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Location
     */
    public $parentLocations;
}