<?php

namespace AdWords\o\v201109;



class MonthlySearchVolume 
{
    /**
     * The year this search volume occurred in. (i.e. 2009)
     * @var string
     */
    public $year;
    /**
     * The month this search volume occurred in. Month is 1 indexed,
     * such that 1=January and 12=December.
     * @var string
     */
    public $month;
    /**
     * The approximate number of searches in this year/month. A {@code null} count
     * means that data is unavailable or unknown.
     * @var string
     */
    public $count;

    public function __construct($year = null, $month = null, $count = null)
    {
        $this->year = $year;
        $this->month = $month;
        $this->count = $count;
    }
}