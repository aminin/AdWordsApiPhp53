<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class PolicyViolationError extends ApiError
{
    /**
     * Unique identifier for the violation.
     * @var \AdWords\cm\v201109\PolicyViolationKey
     */
    public $key;
    /**
     * Name of policy suitable for display to users. In the user&#039;s preferred
     * language.
     * @var string
     */
    public $externalPolicyName;
    /**
     * Url with writeup about the policy.
     * @var string
     */
    public $externalPolicyUrl;
    /**
     * Localized description of the violation.
     * @var string
     */
    public $externalPolicyDescription;
    /**
     * Whether user can file an exemption request for this violation.
     * @var string
     */
    public $isExemptable;
    /**
     * Lists the parts that violate the policy.
     * @var \AdWords\cm\v201109\PolicyViolationErrorPart
     */
    public $violatingParts;
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}