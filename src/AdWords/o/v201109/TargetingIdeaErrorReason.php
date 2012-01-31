<?php

namespace AdWords\o\v201109;



class TargetingIdeaErrorReason
{
    /**
     * Error returned when there are multiple instance of same type of
     * {@link com.google.ads.api.services.targetingideas.search.SearchParameter}s.
     */
    const CHOICE_DUPLICATE_SEARCH_FILTER_TYPES_PRESENT = 'DUPLICATE_SEARCH_FILTER_TYPES_PRESENT';
    /**
     * Error returned when the
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
     * doesn&#039;t have enough
     * {@link com.google.ads.api.services.targetingideas.search.SearchParameter}s
     * to execute request.
     */
    const CHOICE_INSUFFICIENT_SEARCH_PARAMETERS = 'INSUFFICIENT_SEARCH_PARAMETERS';
    /**
     * Error returned when an
     * {@link com.google.ads.api.services.targetingideas.external.AttributeType}
     * doesn&#039;t match the
     * {@link com.google.ads.api.services.targetingideas.attributes.IdeaType}
     * specified in the
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}.
     * For example, if the {@code KEYWORD} idea type selector contain
     * an AttributeType for {@code PLACEMENT}, this error will be returned.
     */
    const CHOICE_INVALID_ATTRIBUTE_TYPE = 'INVALID_ATTRIBUTE_TYPE';
    /**
     * Error returned when a
     * {@link com.google.ads.api.services.targetingideas.search.SearchParameter}
     * doesn&#039;t match the
     * {@link com.google.ads.api.services.targetingideas.attributes.IdeaType}
     * specified in the
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}.
     * For example, if the {@code KEYWORD} idea type selector contain
     * {@link com.google.ads.api.services.targetingideas.search.SearchParameter}
     * for {@code PLACEMENT}, then this error is returned.
     */
    const CHOICE_INVALID_SEARCH_PARAMETERS = 'INVALID_SEARCH_PARAMETERS';
    /**
     * Error returned when a selector contains mutually exclusive parameters.
     */
    const CHOICE_MUTUALLY_EXCLUSIVE_SEARCH_PARAMETERS_IN_QUERY = 'MUTUALLY_EXCLUSIVE_SEARCH_PARAMETERS_IN_QUERY';
    /**
     * Error returned when the
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}
     * is not available.
     */
    const CHOICE_SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';
    /**
     * Error returned when the URL value specified in the
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}, such as
     * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter},
     * is not a valid URL.
     */
    const CHOICE_INVALID_URL_IN_SEARCH_PARAMETER = 'INVALID_URL_IN_SEARCH_PARAMETER';
    /**
     * Error returned when the requested number of entries in
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}&#039;s
     * {@link com.google.ads.api.services.common.pagination.Paging} is greater
     * than the maximum allowed.
     */
    const CHOICE_TOO_MANY_RESULTS_REQUESTED = 'TOO_MANY_RESULTS_REQUESTED';
    /**
     * Error returned when the requested
     * {@link com.google.ads.api.services.common.pagination.Paging} is
     * missing from
     * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
     * when required.
     */
    const CHOICE_NO_PAGING_IN_SELECTOR = 'NO_PAGING_IN_SELECTOR';

    private $_validValues = array(
        'DUPLICATE_SEARCH_FILTER_TYPES_PRESENT',
        'INSUFFICIENT_SEARCH_PARAMETERS',
        'INVALID_ATTRIBUTE_TYPE',
        'INVALID_SEARCH_PARAMETERS',
        'MUTUALLY_EXCLUSIVE_SEARCH_PARAMETERS_IN_QUERY',
        'SERVICE_UNAVAILABLE',
        'INVALID_URL_IN_SEARCH_PARAMETER',
        'TOO_MANY_RESULTS_REQUESTED',
        'NO_PAGING_IN_SELECTOR',
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