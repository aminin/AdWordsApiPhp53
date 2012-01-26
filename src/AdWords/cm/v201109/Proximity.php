<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Proximity extends Criterion
{
    /**
     * Latitude and longitude.
     * This field can be selected using the value &quot;GeoPoint&quot;.
     * @var \AdWords\cm\v201109\GeoPoint
     */
    public $geoPoint;
    /**
     * Radius distance units.
     * This field can be selected using the value &quot;RadiusDistanceUnits&quot;.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\ProximityDistanceUnits
     */
    public $radiusDistanceUnits;
    /**
     * Radius expressed in distance units.
     * This field can be selected using the value &quot;RadiusInUnits&quot;.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var string
     */
    public $radiusInUnits;
    /**
     * Full address; null if unknonwn.
     * This field can be selected using the value &quot;Address&quot;.
     * @var \AdWords\cm\v201109\Address
     */
    public $address;
}