<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Polygon extends Criterion
{
    /**
     * The latitude/longitude points that define the polygon. At least
     * three points are required, and no point can be more than 400km
     * away from the center of the polygon.
     * This field can be selected using the value &quot;Vertices&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\GeoPoint
     */
    public $vertices;
}