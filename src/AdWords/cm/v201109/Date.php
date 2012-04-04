<?php

namespace AdWords\cm\v201109;



class Date 
{
    /**
     * Year (e.g., 2009)
     * @var string
     */
    public $year;
    /**
     * Month (1..12)
     * @var string
     */
    public $month;
    /**
     * Day (1..31)
     * @var string
     */
    public $day;

    public function __construct($year = null, $month = null, $day = null)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }
}