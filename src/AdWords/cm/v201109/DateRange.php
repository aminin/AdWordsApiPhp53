<?php

namespace AdWords\cm\v201109;



class DateRange 
{
    /**
     * the lower bound of this date range, inclusive.
     * @var \AdWords\cm\v201109\Date
     */
    public $min;
    /**
     * the upper bound of this date range, inclusive.
     * @var \AdWords\cm\v201109\Date
     */
    public $max;

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}