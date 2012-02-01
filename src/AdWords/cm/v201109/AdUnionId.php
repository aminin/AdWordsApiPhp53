<?php

namespace AdWords\cm\v201109;



class AdUnionId 
{
    /**
     * The ID of the ad union
     * This field must be greater than or equal to 1.
     * @var string
     */
    public $id;
    /**
     * Indicates that this instance is a subtype of AdUnionId.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $AdUnionIdType;
    private $_propertyMap = array(
        "AdUnionId.Type" => "AdUnionIdType",
    );

    public function __construct($id = null, $AdUnionIdType = null)
    {
        $this->id = $id;
        $this->AdUnionIdType = $AdUnionIdType;
    }

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