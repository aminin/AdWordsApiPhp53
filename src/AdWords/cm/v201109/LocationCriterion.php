<?php

namespace AdWords\cm\v201109;



class LocationCriterion 
{
    /**
     * Location criterion
     * @var \AdWords\cm\v201109\Location
     */
    public $location;
    /**
     * Canonical name of the location criterion.
     * This field can be selected using the value &quot;CanonicalName&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $canonicalName;
    /**
     * Approximate user population that will be targeted, rounded to the nearest 100.
     * This field can be selected using the value &quot;Reach&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $reach;
    /**
     * Locale of the name, as specified in the request.  Note: If the specified locale filter
     * is invalid, or not supported, en_US will be used by default.
     * This field can be filtered on using the value &quot;Locale&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $locale;
    /**
     * Original search term, as specified in the input request for search by name.  Note:
     * This field is useful in the case that the original search name does not match the official
     * name of the location, for example, Florence -&gt; Firenze.
     * The number of search terms is limited to 25 per request.
     * 
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $searchTerm;

    public function __construct($location = null, $canonicalName = null, $reach = null, $locale = null, $searchTerm = null)
    {
        $this->location = $location;
        $this->canonicalName = $canonicalName;
        $this->reach = $reach;
        $this->locale = $locale;
        $this->searchTerm = $searchTerm;
    }
}