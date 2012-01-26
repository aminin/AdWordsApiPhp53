<?php

namespace AdWords\cm\v201109;



abstract class TargetList 
{
    /**
     * Id of campaign having its targets operated on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $campaignId;
    /**
     * Indicates that this instance is a subtype of TargetList.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $TargetListType;
    private $_propertyMap = array(
        "TargetList.Type" => "TargetListType",
    );

    /**
     * Set property with php-incompatible name
     *
     * @param string $var   attribute name to set
     * @param mixed  $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        }
    }

    /**
     * Get property with php-incompatible name
     *
     * @param string $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else {
            return null;
        }
    }
}