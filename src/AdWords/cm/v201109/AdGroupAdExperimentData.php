<?php

namespace AdWords\cm\v201109;



class AdGroupAdExperimentData 
{
    /**
     * This field can be selected using the value &quot;ExperimentId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $experimentId;
    /**
     * Status of this AdGroupAd in the experiment. It must be specified while adding
     * experiment data, which could come as a SET as well
     * This field can be selected using the value &quot;ExperimentDeltaStatus&quot;.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\ExperimentDeltaStatus
     */
    public $experimentDeltaStatus;
    /**
     * Status of the experiment row
     * This field can be selected using the value &quot;ExperimentDataStatus&quot;.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ExperimentDataStatus
     */
    public $experimentDataStatus;
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