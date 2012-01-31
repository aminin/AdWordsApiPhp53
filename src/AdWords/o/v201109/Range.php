<?php

namespace AdWords\o\v201109;



class Range 
{
    /**
     * @var \AdWords\cm\v201109\ComparableValue
     */
    public $min;
    /**
     * @var \AdWords\cm\v201109\ComparableValue
     */
    public $max;

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}