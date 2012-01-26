<?php

namespace AdWords\cm\v201109;



class CampaignCriterionLimitExceededCriteriaLimitType
{
    const CHOICE_CAMPAIGN_CRITERIA = 'CAMPAIGN_CRITERIA';
    const CHOICE_CAMPAIGN_NEGATIVE_KEYWORD = 'CAMPAIGN_NEGATIVE_KEYWORD';
    const CHOICE_CAMPAIGN_NEGATIVE_WEBSITE = 'CAMPAIGN_NEGATIVE_WEBSITE';
    const CHOICE_CAMPAIGN_LOCATION_CRITERIA = 'CAMPAIGN_LOCATION_CRITERIA';
    const CHOICE_CAMPAIGN_PROXIMITY_CRITERIA = 'CAMPAIGN_PROXIMITY_CRITERIA';

    private $_validValues = array(
        'CAMPAIGN_CRITERIA',
        'CAMPAIGN_NEGATIVE_KEYWORD',
        'CAMPAIGN_NEGATIVE_WEBSITE',
        'CAMPAIGN_LOCATION_CRITERIA',
        'CAMPAIGN_PROXIMITY_CRITERIA',
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