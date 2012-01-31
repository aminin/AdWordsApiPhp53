<?php

namespace AdWords\o\v201109;



class TargetingIdeaSelector 
{
    /**
     * Search for targeting ideas based on these search rules.
     * 
     * An empty set indicates this selector is valid for selecting metadata
     * with default parameters.
     * This field must not contain {@code null} elements.
     * Elements in this field must have distinct types.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\SearchParameter
     */
    public $searchParameters;
    /**
     * Limits the request to responses of this {@link IdeaType}, e.g. {@code
     * KEYWORDS} or {@code PLACEMENTS}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\IdeaType
     */
    public $ideaType;
    /**
     * Specifies the {@link RequestType}, e.g. {@code IDEAS} or {@code STATS}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\RequestType
     */
    public $requestType;
    /**
     * Request {@link Attribute}s and associated data for this set of {@link Type}s.
     * 
     * An empty set indicates a request for
     * {@link com.google.ads.api.services.common.optimization.attributes.KeywordAttribute},
     * {@link com.google.ads.api.services.common.optimization.attributes.PlacementAttribute},
     * and {@link IdeaType}.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * @var \AdWords\o\v201109\AttributeType
     */
    public $requestedAttributeTypes;
    /**
     * A {@link Paging} object that specifies the desired starting index and
     * number of results to return.
     * @var \AdWords\cm\v201109\Paging
     */
    public $paging;
    /**
     * The locale code (for example &quot;en_US&quot;) used for localizing strings,
     * controlling numeric formatting, and the like.  See RFC 3066 for
     * information on the format used.
     * @var string
     */
    public $localeCode;
    /**
     * The currency code to be used for all monetary values returned in results in
     * ISO format (see
     * http://code.google.com/apis/adwords/docs/developer/adwords_api_currency.html
     * for supported currencies). The default is &quot;USD&quot; (US dollars).
     * @var string
     */
    public $currencyCode;

    public function __construct($searchParameters = null, $ideaType = null, $requestType = null, $requestedAttributeTypes = null, $paging = null, $localeCode = null, $currencyCode = null)
    {
        $this->searchParameters = $searchParameters;
        $this->ideaType = $ideaType;
        $this->requestType = $requestType;
        $this->requestedAttributeTypes = $requestedAttributeTypes;
        $this->paging = $paging;
        $this->localeCode = $localeCode;
        $this->currencyCode = $currencyCode;
    }
}