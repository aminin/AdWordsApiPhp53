<?php

namespace AdWords\cm\v201109;



class EntityCountLimitExceededReason
{
    const CHOICE_ACCOUNT_LIMIT = 'ACCOUNT_LIMIT';
    const CHOICE_CAMPAIGN_LIMIT = 'CAMPAIGN_LIMIT';
    const CHOICE_ADGROUP_LIMIT = 'ADGROUP_LIMIT';
    /**
     * Specifies max number of ads not intended for Display Network; applies to
     * MobileAd, TextAd, TemplateAd (text templates only).
     */
    const CHOICE_ADGROUP_TEXT_AD_LIMIT = 'ADGROUP_TEXT_AD_LIMIT';
    /**
     * Specifies max number of Display Network ads; applies to
     * ImageAd, MobileImageAd, TemplateAd (except text templates).
     */
    const CHOICE_ADGROUP_DISPLAY_AD_LIMIT = 'ADGROUP_DISPLAY_AD_LIMIT';
    /**
     * Specific limit that has been exceeded is unknown (the client may be of an
     * older version than the server).
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'ACCOUNT_LIMIT',
        'CAMPAIGN_LIMIT',
        'ADGROUP_LIMIT',
        'ADGROUP_TEXT_AD_LIMIT',
        'ADGROUP_DISPLAY_AD_LIMIT',
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