<?php

namespace AdWords\cm\v201109;



class Level
{
    /**
     * The cap is applied at the creative level.
     */
    const CHOICE_CREATIVE = 'CREATIVE';
    /**
     * The cap is applied at the ad group level.
     */
    const CHOICE_ADGROUP = 'ADGROUP';
    /**
     * The cap is applied at the campaign level.
     */
    const CHOICE_CAMPAIGN = 'CAMPAIGN';
    /**
     * This value cannot be set by the user and sent to the AdWords API servers,
     * as it would generate a RejectedError.
     * It can only be received by the user from the AdWords API servers and it
     * means that a new value available in a newer API release version is not
     * known in the current API release version.
     * If the user encounters this value, it means an upgrade is required
     * in order to take advantage of the latest AdWords API functionality.
     * Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.
     */
    const CHOICE_UNKNOWN = 'UNKNOWN';

    private $_validValues = array(
        'CREATIVE',
        'ADGROUP',
        'CAMPAIGN',
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