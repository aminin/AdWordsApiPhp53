<?php

namespace AdWords\o\v201109;



class StatsEstimate 
{
    /**
     * The estimated average CPC.
     * @var \AdWords\cm\v201109\Money
     */
    public $averageCpc;
    /**
     * The estimated average position.
     * @var string
     */
    public $averagePosition;
    /**
     * The estimated number of clicks per day, in floating point representation.
     * @var string
     */
    public $clicksPerDay;
    /**
     * The estimated total cost.
     * @var \AdWords\cm\v201109\Money
     */
    public $totalCost;

    public function __construct($averageCpc = null, $averagePosition = null, $clicksPerDay = null, $totalCost = null)
    {
        $this->averageCpc = $averageCpc;
        $this->averagePosition = $averagePosition;
        $this->clicksPerDay = $clicksPerDay;
        $this->totalCost = $totalCost;
    }
}