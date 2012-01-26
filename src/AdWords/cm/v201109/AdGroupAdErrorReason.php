<?php

namespace AdWords\cm\v201109;



class AdGroupAdErrorReason
{
    /**
     * The specified ad was not found in the adgroup
     */
    const CHOICE_AD_NOT_UNDER_ADGROUP = 'AD_NOT_UNDER_ADGROUP';
    /**
     * Deleted ads may not be modified
     */
    const CHOICE_CANNOT_OPERATE_ON_DELETED_ADGROUPAD = 'CANNOT_OPERATE_ON_DELETED_ADGROUPAD';
    /**
     * An ad of this type is deprecated and cannot be created. Only deletions
     * are permitted.
     */
    const CHOICE_CANNOT_CREATE_DEPRECATED_ADS = 'CANNOT_CREATE_DEPRECATED_ADS';
    /**
     * A required field was not specified or is an empty string.
     */
    const CHOICE_EMPTY_FIELD = 'EMPTY_FIELD';
    /**
     * An ad may only be modified once per call
     */
    const CHOICE_ENTITY_REFERENCED_IN_MULTIPLE_OPS = 'ENTITY_REFERENCED_IN_MULTIPLE_OPS';
    /**
     * The specified operation is not supported.  Only ADD, SET, and REMOVE
     * are supported
     */
    const CHOICE_UNSUPPORTED_OPERATION = 'UNSUPPORTED_OPERATION';

    private $_validValues = array(
        'AD_NOT_UNDER_ADGROUP',
        'CANNOT_OPERATE_ON_DELETED_ADGROUPAD',
        'CANNOT_CREATE_DEPRECATED_ADS',
        'EMPTY_FIELD',
        'ENTITY_REFERENCED_IN_MULTIPLE_OPS',
        'UNSUPPORTED_OPERATION',
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