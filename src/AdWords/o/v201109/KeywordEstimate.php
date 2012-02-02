<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\Estimate;


class KeywordEstimate extends Estimate
{
    /**
     * The existing criterionId for this keyword, if any.
     * 
     * This will not be returned if this is a new keyword.
     * @var string
     */
    public $criterionId;
    /**
     * The lower bound on the estimated stats.
     * 
     * This is not a guarantee that actual performance will never be lower than
     * these stats.
     * @var \AdWords\o\v201109\StatsEstimate
     */
    public $min;
    /**
     * The upper bound on the estimated stats.
     * 
     * This is not a guarantee that actual performance will never be higher than
     * these stats.
     * @var \AdWords\o\v201109\StatsEstimate
     */
    public $max;
}