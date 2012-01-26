<?php

namespace AdWords\cm\v201109;



class ConversionOptimizerEligibilityRejectionReason
{
    /**
     * Campaign is not active
     */
    const CHOICE_CAMPAIGN_IS_NOT_ACTIVE = 'CAMPAIGN_IS_NOT_ACTIVE';
    /**
     * Conversion optimizer is available to only Manual CPC campaign
     */
    const CHOICE_NOT_CPC_CAMPAIGN = 'NOT_CPC_CAMPAIGN';
    /**
     * Conversion tracking is not enabled for the Campaign
     */
    const CHOICE_CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';
    /**
     * The campaign does not meet the requirement to have a sufficient count
     * of conversions.
     */
    const CHOICE_NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CAMPAIGN_IS_NOT_ACTIVE',
        'NOT_CPC_CAMPAIGN',
        'CONVERSION_TRACKING_NOT_ENABLED',
        'NOT_ENOUGH_CONVERSIONS',
        'UNKNOWN',
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