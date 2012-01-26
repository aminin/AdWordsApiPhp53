<?php

namespace AdWords\cm\v201109;



class AdGroupExperimentData 
{
    /**
     * This field can be selected using the value &quot;ExperimentId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $experimentId;
    /**
     * Status of this adgroup in the experiment. It must be specified while adding
     * experiment data, which could come through a SET as well.
     * This field can be selected using the value &quot;ExperimentDeltaStatus&quot;.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var \AdWords\cm\v201109\ExperimentDeltaStatus
     */
    public $experimentDeltaStatus;
    /**
     * Status of the experiment row. If this is set to DELETED in a SET operation, the adgroup
     * will be removed from the experiment.
     * This field can be selected using the value &quot;ExperimentRowStatus&quot;.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ExperimentDataStatus
     */
    public $experimentDataStatus;
    /**
     * Bid multipliers, if any.
     * @var \AdWords\cm\v201109\AdGroupExperimentBidMultipliers
     */
    public $experimentBidMultipliers;
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