<?php

namespace AdWords\cm\v201109;



class QuotaErrorReason
{
    /**
     * Too many ad groups per campaign.
     */
    const CHOICE_TOO_MANY_ADGROUPS_PER_CAMPAIGN = 'TOO_MANY_ADGROUPS_PER_CAMPAIGN';
    /**
     * Too many campaigns per account.
     */
    const CHOICE_TOO_MANY_CAMPAIGNS_PER_ACCOUNT = 'TOO_MANY_CAMPAIGNS_PER_ACCOUNT';
    /**
     * Too many conversion types per account.
     */
    const CHOICE_TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT = 'TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT';
    /**
     * Too many keywords per ad group.
     */
    const CHOICE_TOO_MANY_KEYWORDS_PER_ADGROUP = 'TOO_MANY_KEYWORDS_PER_ADGROUP';
    /**
     * Too many keywords per campaign.
     */
    const CHOICE_TOO_MANY_KEYWORDS_PER_CAMPAIGN = 'TOO_MANY_KEYWORDS_PER_CAMPAIGN';
    /**
     * Too many keywords per customer.
     */
    const CHOICE_TOO_MANY_KEYWORDS_PER_CUSTOMER = 'TOO_MANY_KEYWORDS_PER_CUSTOMER';
    /**
     * Too many sites per ad group.
     */
    const CHOICE_TOO_MANY_SITES_PER_ADGROUP = 'TOO_MANY_SITES_PER_ADGROUP';
    /**
     * Too many sites per campaign.
     */
    const CHOICE_TOO_MANY_SITES_PER_CAMPAIGN = 'TOO_MANY_SITES_PER_CAMPAIGN';
    /**
     * Too many campaign level negative keywords + negative sites + geo targets
     * for the account.
     */
    const CHOICE_TOO_MANY_CRITERIA_PER_ACCOUNT = 'TOO_MANY_CRITERIA_PER_ACCOUNT';
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'TOO_MANY_ADGROUPS_PER_CAMPAIGN',
        'TOO_MANY_CAMPAIGNS_PER_ACCOUNT',
        'TOO_MANY_CONVERSION_TYPES_PER_ACCOUNT',
        'TOO_MANY_KEYWORDS_PER_ADGROUP',
        'TOO_MANY_KEYWORDS_PER_CAMPAIGN',
        'TOO_MANY_KEYWORDS_PER_CUSTOMER',
        'TOO_MANY_SITES_PER_ADGROUP',
        'TOO_MANY_SITES_PER_CAMPAIGN',
        'TOO_MANY_CRITERIA_PER_ACCOUNT',
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