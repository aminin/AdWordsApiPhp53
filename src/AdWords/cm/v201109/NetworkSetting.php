<?php

namespace AdWords\cm\v201109;



class NetworkSetting 
{
    /**
     * Ads will be served with Google.com search results.
     * This field can be selected using the value &quot;TargetGoogleSearch&quot;.This field can be filtered on.
     * @var string
     */
    public $targetGoogleSearch;
    /**
     * Ads will be served on partner sites in the Google Search Network
     * (requires {@code GOOGLE_SEARCH}).
     * This field can be selected using the value &quot;TargetSearchNetwork&quot;.This field can be filtered on.
     * @var string
     */
    public $targetSearchNetwork;
    /**
     * Ads will be served on specified placements in the Google Display Network.
     * Placements are specified using {@code Placement} criteria.
     * This field can be selected using the value &quot;TargetContentNetwork&quot;.This field can be filtered on.
     * @var string
     */
    public $targetContentNetwork;
    /**
     * Ads will be served on the Google Display Network based on
     * {@code Keyword} criteria contextually matching the placement&#039;s content
     * (requires {@code CONTENT_NETWORK}).
     * This field can be selected using the value &quot;TargetContentContextual&quot;.This field can be filtered on.
     * @var string
     */
    public $targetContentContextual;
    /**
     * Ads will be served on the Google Partner Network. This is available to
     * only some specific Google partner accounts.
     * This field can be selected using the value &quot;TargetPartnerSearchNetwork&quot;.This field can be filtered on.
     * @var string
     */
    public $targetPartnerSearchNetwork;

    public function __construct($targetGoogleSearch = null, $targetSearchNetwork = null, $targetContentNetwork = null, $targetContentContextual = null, $targetPartnerSearchNetwork = null)
    {
        $this->targetGoogleSearch = $targetGoogleSearch;
        $this->targetSearchNetwork = $targetSearchNetwork;
        $this->targetContentNetwork = $targetContentNetwork;
        $this->targetContentContextual = $targetContentContextual;
        $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }
}