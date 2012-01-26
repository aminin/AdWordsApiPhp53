<?php

namespace AdWords\cm\v201109;



class Address 
{
    /**
     * Street address line 1; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $streetAddress;
    /**
     * Street address line 2; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $streetAddress2;
    /**
     * Name of the city; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $cityName;
    /**
     * Province or state code; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $provinceCode;
    /**
     * Province or state name; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $provinceName;
    /**
     * Postal code; null if unknown.
     * This string must not be empty.
     * @var string
     */
    public $postalCode;
    /**
     * Country code; null if unknown.
     * @var string
     */
    public $countryCode;

    public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null)
    {
        $this->streetAddress = $streetAddress;
        $this->streetAddress2 = $streetAddress2;
        $this->cityName = $cityName;
        $this->provinceCode = $provinceCode;
        $this->provinceName = $provinceName;
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
    }
}