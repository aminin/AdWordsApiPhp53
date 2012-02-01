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

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultipliers = null)
    {
        $this->experimentId = $experimentId;
        $this->experimentDeltaStatus = $experimentDeltaStatus;
        $this->experimentDataStatus = $experimentDataStatus;
        $this->experimentBidMultipliers = $experimentBidMultipliers;
    }
}