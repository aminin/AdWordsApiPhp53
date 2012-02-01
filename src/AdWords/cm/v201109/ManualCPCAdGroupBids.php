<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupBids;


class ManualCPCAdGroupBids extends AdGroupBids
{
    /**
     * Max CPC (cost per click) bid for keyword targeting on search network.
     * This field can be selected using the value &quot;KeywordMaxCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $keywordMaxCpc;
    /**
     * Max CPC bid for keyword targeting on content network.
     * This field can be selected using the value &quot;KeywordContentMaxCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $keywordContentMaxCpc;
    /**
     * Max CPC bid for site targeting. This field has been sunsetted and
     * will return an error if set.
     * This field can be selected using the value &quot;SiteMaxCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Bid
     */
    public $siteMaxCpc;
    /**
     * The flag to indicate the enhanced CPC bidding is turned on for the campaign
     * This field can be selected using the value &quot;EnhancedCpcEnabled&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $enhancedCpcEnabled;
}