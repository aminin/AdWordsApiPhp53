<?php

namespace AdWords\cm\v201109;



class BidMultiplier 
{
    /**
     * A number used in bidding strategies to increase or decrease a bid by a scale factor.
     * @var string
     */
    public $multiplier;
    /**
     * The bid after multiplying original bid with the multiplier.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Bid
     */
    public $multipliedBid;

    public function __construct($multiplier = null, $multipliedBid = null)
    {
        $this->multiplier = $multiplier;
        $this->multipliedBid = $multipliedBid;
    }
}