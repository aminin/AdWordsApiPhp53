<?php

namespace AdWords\cm\v201109;



class Paging 
{
    /**
     * Index of the first result to return in this page.
     * This field must be greater than or equal to 0.
     * @var string
     */
    public $startIndex;
    /**
     * Maximum number of results to return in this page. Set this to a reasonable value to limit
     * the number of results returned per page.
     * This field must be greater than or equal to 0.
     * @var string
     */
    public $numberResults;

    public function __construct($startIndex = null, $numberResults = null)
    {
        $this->startIndex = $startIndex;
        $this->numberResults = $numberResults;
    }
}