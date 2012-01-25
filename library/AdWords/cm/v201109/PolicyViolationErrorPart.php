<?php

namespace AdWords\cm\v201109;



class PolicyViolationErrorPart 
{
    /**
     * Index of the starting position of the violating text within the line.
     * @var string
     */
    public $index;
    /**
     * The length of the violating text.
     * @var string
     */
    public $length;

    public function __construct($index = null, $length = null)
    {
        $this->index = $index;
        $this->length = $length;
    }
}