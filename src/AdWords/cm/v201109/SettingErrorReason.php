<?php

namespace AdWords\cm\v201109;



class SettingErrorReason
{
    /**
     * The campaign already has a setting of the type that is being added.
     */
    const CHOICE_DUPLICATE_SETTING_TYPE = 'DUPLICATE_SETTING_TYPE';
    /**
     * The campaign setting is not available for this AdWords account.
     */
    const CHOICE_SETTING_TYPE_IS_NOT_AVAILABLE = 'SETTING_TYPE_IS_NOT_AVAILABLE';
    /**
     * The setting is not compatible with the campaign.
     */
    const CHOICE_SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN = 'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN';
    /**
     * Unspecified campaign setting error.
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'DUPLICATE_SETTING_TYPE',
        'SETTING_TYPE_IS_NOT_AVAILABLE',
        'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN',
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