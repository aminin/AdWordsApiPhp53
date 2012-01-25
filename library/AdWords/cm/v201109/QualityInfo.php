<?php

namespace AdWords\cm\v201109;



class QualityInfo 
{
    /**
     * Whether the keyword relevance is acceptable.
     * This field can be selected using the value &quot;IsKeywordAdRelevanceAcceptable&quot;.This field can be filtered on.
     * @var string
     */
    public $isKeywordAdRelevanceAcceptable;
    /**
     * Whether the landing page quality is acceptable.
     * This field can be selected using the value &quot;IsLandingPageQualityAcceptable&quot;.This field can be filtered on.
     * @var string
     */
    public $isLandingPageQualityAcceptable;
    /**
     * Whether the latency to load the landing page is acceptable.
     * This field can be selected using the value &quot;IsLandingPageLatencyAcceptable&quot;.This field can be filtered on.
     * @var string
     */
    public $isLandingPageLatencyAcceptable;
    /**
     * Keyword quality score that ranges from 1 to 10, 1 being the lowest, 10 the highest.
     * This field can be selected using the value &quot;QualityScore&quot;.This field can be filtered on.
     * @var string
     */
    public $qualityScore;

    public function __construct($isKeywordAdRelevanceAcceptable = null, $isLandingPageQualityAcceptable = null, $isLandingPageLatencyAcceptable = null, $qualityScore = null)
    {
        $this->isKeywordAdRelevanceAcceptable = $isKeywordAdRelevanceAcceptable;
        $this->isLandingPageQualityAcceptable = $isLandingPageQualityAcceptable;
        $this->isLandingPageLatencyAcceptable = $isLandingPageLatencyAcceptable;
        $this->qualityScore = $qualityScore;
    }
}