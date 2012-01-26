<?php

namespace AdWords\cm\v201109;



class AdGroupServiceErrorReason
{
    /**
     * AdGroup with the same name already exists for the campaign.
     */
    const CHOICE_DUPLICATE_ADGROUP_NAME = 'DUPLICATE_ADGROUP_NAME';
    /**
     * AdGroup Id is not valid.
     */
    const CHOICE_INVALID_ADGROUP_ID = 'INVALID_ADGROUP_ID';
    /**
     * AdGroup name is not valid.
     */
    const CHOICE_INVALID_ADGROUP_NAME = 'INVALID_ADGROUP_NAME';
    /**
     * Cannot delete an adgroup, adgroup status can be marked deleted
     * using set operator.
     */
    const CHOICE_USE_SET_OPERATOR_AND_MARK_STATUS_TO_DELETED = 'USE_SET_OPERATOR_AND_MARK_STATUS_TO_DELETED';
    /**
     * Advertiser is not allowed to target sites or set site bids that are
     * not on the Google Search Network.
     */
    const CHOICE_ADVERTISER_NOT_ON_CONTENT_NETWORK = 'ADVERTISER_NOT_ON_CONTENT_NETWORK';
    /**
     * Bid amount is too big.
     */
    const CHOICE_BID_TOO_BIG = 'BID_TOO_BIG';
    /**
     * Bid amount is too small.
     */
    const CHOICE_BID_TOO_SMALL = 'BID_TOO_SMALL';
    /**
     * AdGroup bid does not match the campaign&#039;s bidding strategy.
     */
    const CHOICE_BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH = 'BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH';
    /**
     * Invalid bid amoumt.
     */
    const CHOICE_INVALID_BID = 'INVALID_BID';
    /**
     * AdGroup name is required for Add.
     */
    const CHOICE_MISSING_ADGROUP_NAME = 'MISSING_ADGROUP_NAME';

    private $_validValues = array(
        'DUPLICATE_ADGROUP_NAME',
        'INVALID_ADGROUP_ID',
        'INVALID_ADGROUP_NAME',
        'USE_SET_OPERATOR_AND_MARK_STATUS_TO_DELETED',
        'ADVERTISER_NOT_ON_CONTENT_NETWORK',
        'BID_TOO_BIG',
        'BID_TOO_SMALL',
        'BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH',
        'INVALID_BID',
        'MISSING_ADGROUP_NAME',
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