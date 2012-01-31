<?php

namespace AdWords\cm\v201109;



class BidLandscapeLandscapePoint 
{
    /**
     * The bid amount used to estimate this landscape point&#039;s data.
     * This field can be selected using the value &quot;Bid&quot;.This field can be filtered on.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Money
     */
    public $bid;
    /**
     * Estimated number of clicks at this bid.
     * This field can be selected using the value &quot;LocalClicks&quot;.This field can be filtered on.
     * @var string
     */
    public $clicks;
    /**
     * Estimated cost at this bid.
     * This field can be selected using the value &quot;LocalCost&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $cost;
    /**
     * Estimated marginal cost per click.
     * This field can be selected using the value &quot;MarginalCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $marginalCpc;
    /**
     * Estimated number of impressions at this bid.
     * This field can be selected using the value &quot;LocalImpressions&quot;.This field can be filtered on.
     * @var string
     */
    public $impressions;

    public function __construct($bid = null, $clicks = null, $cost = null, $marginalCpc = null, $impressions = null)
    {
        $this->bid = $bid;
        $this->clicks = $clicks;
        $this->cost = $cost;
        $this->marginalCpc = $marginalCpc;
        $this->impressions = $impressions;
    }
}