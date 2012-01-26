<?php

namespace AdWords\cm\v201109;



class GeoPoint 
{
    /**
     * Micro degrees for the latitude.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $latitudeInMicroDegrees;
    /**
     * Micro degrees for the longitude.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $longitudeInMicroDegrees;

    public function __construct($latitudeInMicroDegrees = null, $longitudeInMicroDegrees = null)
    {
        $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
        $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
    }
}