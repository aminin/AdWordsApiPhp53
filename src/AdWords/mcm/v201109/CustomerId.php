<?php

namespace AdWords\mcm\v201109;



class CustomerId 
{
    /**
     * @var string
     */
    public $id;

    public function __construct($id = null)
    {
        $this->id = $id;
    }
}