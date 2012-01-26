<?php

namespace AdWords\cm\v201109;



class AdGroupCriterion 
{
    /**
     * The ad group this criterion is in.
     * This field can be selected using the value &quot;AdGroupId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $adGroupId;
    /**
     * This field can be selected using the value &quot;CriterionUse&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\CriterionUse
     */
    public $criterionUse;
    /**
     * The criterion part of the ad group criterion.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Criterion
     */
    public $criterion;
    /**
     * Indicates that this instance is a subtype of AdGroupCriterion.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $AdGroupCriterionType;
    private $_propertyMap = array(
        "AdGroupCriterion.Type" => "AdGroupCriterionType",
    );

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $AdGroupCriterionType = null)
    {
        $this->adGroupId = $adGroupId;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
        $this->AdGroupCriterionType = $AdGroupCriterionType;
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