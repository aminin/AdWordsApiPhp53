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

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null)
    {
        $this->experimentId = $experimentId;
        $this->experimentDeltaStatus = $experimentDeltaStatus;
        $this->experimentDataStatus = $experimentDataStatus;
    }
}