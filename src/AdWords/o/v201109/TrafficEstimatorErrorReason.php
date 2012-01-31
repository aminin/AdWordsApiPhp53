<?php

namespace AdWords\o\v201109;



class TrafficEstimatorErrorReason
{
    /**
     * When the request with {@code null} campaign ID in
     * {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}
     * contains an
     * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}
     * with an ID.
     */
    const CHOICE_NO_CAMPAIGN_FOR_AD_GROUP_ESTIMATE_REQUEST = 'NO_CAMPAIGN_FOR_AD_GROUP_ESTIMATE_REQUEST';
    /**
     * When the request with {@code null} adgroup ID in
     * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}
     * contains a
     * {@link com.google.ads.api.services.trafficestimator.KeywordEstimateRequest}
     * with an ID.
     */
    const CHOICE_NO_AD_GROUP_FOR_KEYWORD_ESTIMATE_REQUEST = 'NO_AD_GROUP_FOR_KEYWORD_ESTIMATE_REQUEST';
    /**
     * All
     * {@link com.google.ads.api.services.trafficestimator.KeywordEstimateRequest}
     * items should have maxCpc associated with them.
     */
    const CHOICE_NO_MAX_CPC_FOR_KEYWORD_ESTIMATE_REQUEST = 'NO_MAX_CPC_FOR_KEYWORD_ESTIMATE_REQUEST';
    /**
     * When there are more
     * {@link com.google.ads.api.services.trafficestimator.KeywordEstimateRequest}s
     * in the request than TrafficEstimatorService allows.
     */
    const CHOICE_TOO_MANY_KEYWORD_ESTIMATE_REQUESTS = 'TOO_MANY_KEYWORD_ESTIMATE_REQUESTS';
    /**
     * When there are more
     * {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}s
     * in the request than TrafficEstimatorService allows.
     */
    const CHOICE_TOO_MANY_CAMPAIGN_ESTIMATE_REQUESTS = 'TOO_MANY_CAMPAIGN_ESTIMATE_REQUESTS';
    /**
     * When there are more
     * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}s
     * in the request than TrafficEstimatorService allows.
     */
    const CHOICE_TOO_MANY_ADGROUP_ESTIMATE_REQUESTS = 'TOO_MANY_ADGROUP_ESTIMATE_REQUESTS';
    /**
     * When there are more targets
     * in the request than TrafficEstimatorService allows. See documentation
     * on {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}
     * for more information about this error.
     */
    const CHOICE_TOO_MANY_TARGETS = 'TOO_MANY_TARGETS';
    /**
     * When an unexpected error occurs.
     */
    const CHOICE_INVALID_INPUT = 'INVALID_INPUT';
    /**
     * When backend service calls fail.
     */
    const CHOICE_SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';

    private $_validValues = array(
        'NO_CAMPAIGN_FOR_AD_GROUP_ESTIMATE_REQUEST',
        'NO_AD_GROUP_FOR_KEYWORD_ESTIMATE_REQUEST',
        'NO_MAX_CPC_FOR_KEYWORD_ESTIMATE_REQUEST',
        'TOO_MANY_KEYWORD_ESTIMATE_REQUESTS',
        'TOO_MANY_CAMPAIGN_ESTIMATE_REQUESTS',
        'TOO_MANY_ADGROUP_ESTIMATE_REQUESTS',
        'TOO_MANY_TARGETS',
        'INVALID_INPUT',
        'SERVICE_UNAVAILABLE',
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