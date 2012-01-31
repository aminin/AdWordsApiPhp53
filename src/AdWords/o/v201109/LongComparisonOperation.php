<?php

namespace AdWords\o\v201109;



class LongComparisonOperation 
{
    /**
     * the minimum value of elements returned by this operation (inclusive).
     * @var string
     */
    public $minimum;
    /**
     * the maximum value of elements returned by this operation (inclusive).
     * @var string
     */
    public $maximum;

    public function __construct($minimum = null, $maximum = null)
    {
        $this->minimum = $minimum;
        $this->maximum = $maximum;
    }
}