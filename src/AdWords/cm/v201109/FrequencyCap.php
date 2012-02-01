<?php

namespace AdWords\cm\v201109;



class FrequencyCap 
{
    /**
     * Maximum number of impressions allowed during the time range by this cap.
     * This field can be selected using the value &quot;FrequencyCapMaxImpressions&quot;.This field can be filtered on.
     * @var string
     */
    public $impressions;
    /**
     * Unit of time the cap is defined at.
     * Only the Day, Week and Month time units are supported.
     * This field can be selected using the value &quot;TimeUnit&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\TimeUnit
     */
    public $timeUnit;
    /**
     * The level on which the cap is to be applied (creative/adgroup).
     * Cap is applied to all the entities of this level in the campaign.
     * This field can be selected using the value &quot;Level&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Level
     */
    public $level;

    public function __construct($impressions = null, $timeUnit = null, $level = null)
    {
        $this->impressions = $impressions;
        $this->timeUnit = $timeUnit;
        $this->level = $level;
    }
}