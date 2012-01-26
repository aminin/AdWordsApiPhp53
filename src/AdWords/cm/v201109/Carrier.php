<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Criterion;


class Carrier extends Criterion
{
    /**
     * This field can be selected using the value &quot;CarrierName&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $name;
    /**
     * This field can be selected using the value &quot;CarrierCountryCode&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $countryCode;
}