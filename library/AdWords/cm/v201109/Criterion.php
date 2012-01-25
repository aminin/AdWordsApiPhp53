<?php

namespace AdWords\cm\v201109;



class Criterion 
{
    /**
     * ID of this criterion.
     * This field can be selected using the value &quot;Id&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.
     * @var string
     */
    public $id;
    /**
     * This field can be selected using the value &quot;CriteriaType&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\CriterionType
     */
    public $type;
    /**
     * Indicates that this instance is a subtype of Criterion.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $CriterionType;
    private $_propertyMap = array(
        "Criterion.Type" => "CriterionType",
    );

    public function __construct($id = null, $type = null, $CriterionType = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
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