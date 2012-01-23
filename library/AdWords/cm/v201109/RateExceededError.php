<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class RateExceededError extends ApiError
{
    /**
     * The error reason represented by an enum.
     * @var \AdWords\cm\v201109\RateExceededErrorReason
     */
    public $reason;
    /**
     * Cause of the rate exceeded error.
     * @var string
     */
    public $rateName;
    /**
     * The scope of the rate (ACCOUNT/DEVELOPER).
     * @var string
     */
    public $rateScope;
    /**
     * The amount of time (in seconds) the client should wait before retrying the request.
     * @var string
     */
    public $retryAfterSeconds;
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