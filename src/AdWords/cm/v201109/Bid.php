<?php

namespace AdWords\cm\v201109;



class Bid 
{
    /**
     * Bid amount.
     * @var \AdWords\cm\v201109\Money
     */
    public $amount;

    public function __construct($amount = null)
    {
        $this->amount = $amount;
    }
}