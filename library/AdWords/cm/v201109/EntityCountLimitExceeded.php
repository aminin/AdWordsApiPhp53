<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class EntityCountLimitExceeded extends ApiError
{
    /**
     * Specifies which level&#039;s limit was exceeded.
     * @var \AdWords\cm\v201109\EntityCountLimitExceededReason
     */
    public $reason;
    /**
     * Id of the entity whose limit was exceeded.
     * @var string
     */
    public $enclosingId;
    /**
     * The limit which was exceeded.
     * @var string
     */
    public $limit;
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