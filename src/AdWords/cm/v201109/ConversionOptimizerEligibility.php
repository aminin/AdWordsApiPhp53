<?php

namespace AdWords\cm\v201109;



class ConversionOptimizerEligibility 
{
    /**
     * If the campaign is eligible to enter conversion optimizer.
     * This field can be selected using the value &quot;Eligible&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $eligible;
    /**
     * Reason why a campaign would be rejected for conversion optimizer.
     * This field can be selected using the value &quot;RejectionReasons&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\ConversionOptimizerEligibilityRejectionReason
     */
    public $rejectionReasons;

    public function __construct($eligible = null, $rejectionReasons = null)
    {
        $this->eligible = $eligible;
        $this->rejectionReasons = $rejectionReasons;
    }
}