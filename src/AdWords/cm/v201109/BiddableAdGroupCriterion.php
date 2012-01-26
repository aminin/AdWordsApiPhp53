<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\AdGroupCriterion;


class BiddableAdGroupCriterion extends AdGroupCriterion
{
    /**
     * Current user set state of criterion.
     * 
     * During an ADD operation: It may not be set to DELETED. Defaults to
     * {@code UserStatus.Active} if unspecified.
     * This field can be selected using the value &quot;Status&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\UserStatus
     */
    public $userStatus;
    /**
     * Serving status.
     * This field can be selected using the value &quot;SystemServingStatus&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\SystemServingStatus
     */
    public $systemServingStatus;
    /**
     * Approval status.
     * This field can be selected using the value &quot;ApprovalStatus&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ApprovalStatus
     */
    public $approvalStatus;
    /**
     * Destination URL override when Ad is triggered by this criterion.
     * 
     * Some sample valid URLs are: &quot;http://www.website.com&quot;,
     * &quot;http://www.domain.com/somepath&quot;.
     * This field can be selected using the value &quot;DestinationUrl&quot;.This field can be filtered on.
     * @var string
     */
    public $destinationUrl;
    /**
     * The campaign bidding strategy specific bids placed for this criterion.
     * @var \AdWords\cm\v201109\AdGroupCriterionBids
     */
    public $bids;
    /**
     * The campaign bidding strategy specific experiment data for
     * this criterion.
     * @var \AdWords\cm\v201109\BiddableAdGroupCriterionExperimentData
     */
    public $experimentData;
    /**
     * First page Cpc for this criterion.
     * This field can be selected using the value &quot;FirstPageCpc&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Bid
     */
    public $firstPageCpc;
    /**
     * Contains quality information about the criterion.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\QualityInfo
     */
    public $qualityInfo;
    /**
     * Contains statistics about the criterion.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Stats
     */
    public $stats;
}