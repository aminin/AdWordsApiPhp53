<?php

namespace AdWords\cm\v201109;



class FrequencyCap 
{
    /**
     * Maximum number of impressions allowed during the time range by this cap.
     * This field can be selected using the value &quot;FrequencyCapMaxImpressions&quot;.This field can be filtered on.
     * @var string
     */
    public $impressions;
    /**
     * Unit of time the cap is defined at.
     * Only the Day, Week and Month time units are supported.
     * This field can be selected using the value &quot;TimeUnit&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\TimeUnit
     */
    public $timeUnit;
    /**
     * The level on which the cap is to be applied (creative/adgroup).
     * Cap is applied to all the entities of this level in the campaign.
     * This field can be selected using the value &quot;Level&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Level
     */
    public $level;
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