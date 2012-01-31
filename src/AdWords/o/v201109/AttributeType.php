<?php

namespace AdWords\o\v201109;



class AttributeType
{
    /**
     * Value substituted in when the actual value is not available in the Web API
     * version being used.  (Please upgrade to the latest published WSDL.)
     * This element is not supported directly by any {@link IdeaType}.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';
    /**
     * Represents the percentage of the time that the advertiser&#039;s ad (if applicable)
     * was shown for queries associated with the given keyword idea.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.DoubleAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_AD_SHARE = 'AD_SHARE';
    /**
     * Represents the (approximate) number of impressions per day for this placement idea on
     * the content network.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.LongRangeAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_APPROX_CONTENT_IMPRESSIONS_PER_DAY = 'APPROX_CONTENT_IMPRESSIONS_PER_DAY';
    /**
     * Represents the average number of searches (approximated) on this keyword idea, targeted
     * to the specified geographies.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.LongAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_AVERAGE_TARGETED_MONTHLY_SEARCHES = 'AVERAGE_TARGETED_MONTHLY_SEARCHES';
    /**
     * Represents the relative amount of competition associated with the given keyword idea,
     * relative to other keywords. This value will be between 0 and 1 (inclusive).
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.DoubleAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_COMPETITION = 'COMPETITION';
    /**
     * This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
     */
    const CHOICE_CRITERION = 'CRITERION';
    /**
     * Represents the webpage from which this keyword idea was extracted (if applicable.)
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.WebpageDescriptorAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_EXTRACTED_FROM_WEBPAGE = 'EXTRACTED_FROM_WEBPAGE';
    /**
     * Represents the various types of ads &amp; sizes of ads that may render within the given
     * placement idea.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.AdFormatSpecListAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_FORMATS = 'FORMATS';
    /**
     * Represents the (approximate) number of searches for the given keyword idea, independant of any
     * geo settings.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.LongAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_GLOBAL_MONTHLY_SEARCHES = 'GLOBAL_MONTHLY_SEARCHES';
    /**
     * Represents the type of the given idea.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.IdeaTypeAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
     */
    const CHOICE_IDEA_TYPE = 'IDEA_TYPE';
    /**
     * Represents the duration(s)/other instream information, for the given placement idea.
     * (if applicable)
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.InStreamAdInfoAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_IN_STREAM_AD_INFO = 'IN_STREAM_AD_INFO';
    /**
     * Represents a category id for a category within the category hierarchy for keyword ideas.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.IntegerSetAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_KEYWORD_CATEGORY = 'KEYWORD_CATEGORY';
    /**
     * Represents the ngram group for the given keyword idea. An ngram group is the longest
     * matching substring of the keyword, that is also common to many other keywords. For instance,
     * the ngram group for both the keywords &quot;car rental&quot; and &quot;car rental coupons&quot; is &quot;car rental&quot;.
     * However, for the keyword &quot;car leasing&quot;, the ngram group is &quot;car&quot; because &quot;car leasing&quot; is not
     * considered common.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.StringAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_NGRAM_GROUP = 'NGRAM_GROUP';
    /**
     * Represents the publisher given name of the given placement idea (if applicable).
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.StringAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_PLACEMENT_NAME = 'PLACEMENT_NAME';
    /**
     * Represents a sample page upon which the given placement idea shows from the content network.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.StringAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_SAMPLE_URL = 'SAMPLE_URL';
    /**
     * Represents the percentage of the time that the advertiser&#039;s webpage (if applicable)
     * was shown for queries associated with the given keyword idea.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.DoubleAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_SEARCH_SHARE = 'SEARCH_SHARE';
    /**
     * Represents a category id for a category within the category hierarchy for placement ideas.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.IntegerAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_PLACEMENT_CATEGORY = 'PLACEMENT_CATEGORY';
    /**
     * Represents the type of media of the given placement idea.  Some examples of this could include:
     * videos on the web, web sites, flash games on the content network, website feeds, etc.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.PlacementTypeAttribute}.
     * This element is supported by following {@link IdeaType}s: PLACEMENT.
     */
    const CHOICE_PLACEMENT_TYPE = 'PLACEMENT_TYPE';
    /**
     * Represents the (approximated) number of searches on this keyword idea (as available for the
     * past twelve months), targeted to the specified geographies.
     * 
     * Resulting attribute is
     * {@link com.google.ads.api.services.common.optimization.attributes.MonthlySearchVolumeAttribute}.
     * This element is supported by following {@link IdeaType}s: KEYWORD.
     */
    const CHOICE_TARGETED_MONTHLY_SEARCHES = 'TARGETED_MONTHLY_SEARCHES';

    private $_validValues = array(
        'UNKNOWN',
        'AD_SHARE',
        'APPROX_CONTENT_IMPRESSIONS_PER_DAY',
        'AVERAGE_TARGETED_MONTHLY_SEARCHES',
        'COMPETITION',
        'CRITERION',
        'EXTRACTED_FROM_WEBPAGE',
        'FORMATS',
        'GLOBAL_MONTHLY_SEARCHES',
        'IDEA_TYPE',
        'IN_STREAM_AD_INFO',
        'KEYWORD_CATEGORY',
        'NGRAM_GROUP',
        'PLACEMENT_NAME',
        'SAMPLE_URL',
        'SEARCH_SHARE',
        'PLACEMENT_CATEGORY',
        'PLACEMENT_TYPE',
        'TARGETED_MONTHLY_SEARCHES',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}