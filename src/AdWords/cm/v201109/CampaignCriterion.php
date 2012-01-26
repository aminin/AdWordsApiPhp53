<?php

namespace AdWords\cm\v201109;



class CampaignCriterion 
{
    /**
     * The campaign that the criterion is in.
     * This field can be selected using the value &quot;CampaignId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $campaignId;
    /**
     * The criterion part of the campaign criterion.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Criterion
     */
    public $criterion;
    /**
     * Indicates that this instance is a subtype of CampaignCriterion.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $CampaignCriterionType;
    private $_propertyMap = array(
        "CampaignCriterion.Type" => "CampaignCriterionType",
    );

    public function __construct($campaignId = null, $criterion = null, $CampaignCriterionType = null)
    {
        $this->campaignId = $campaignId;
        $this->criterion = $criterion;
        $this->CampaignCriterionType = $CampaignCriterionType;
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