<?php

namespace AdWords\cm\v201109;



class Stats 
{
    /**
     * Starting date (inclusive) of the statistics. Format is YYYYMMDD.
     * @var string
     */
    public $startDate;
    /**
     * Ending date (inclusive) of the statistics. Format is YYYYMMDD.
     * @var string
     */
    public $endDate;
    /**
     * The ad network which the stats are for.
     * @var \AdWords\cm\v201109\StatsNetwork
     */
    public $network;
    /**
     * Number of clicks.
     * This field can be selected using the value &quot;Clicks&quot;.This field can be filtered on.
     * @var string
     */
    public $clicks;
    /**
     * Number of impressions.
     * This field can be selected using the value &quot;Impressions&quot;.This field can be filtered on.
     * @var string
     */
    public $impressions;
    /**
     * Cost.
     * This field can be selected using the value &quot;Cost&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $cost;
    /**
     * Average position of ads.
     * This field can be selected using the value &quot;AveragePosition&quot;.This field can be filtered on.
     * @var string
     */
    public $averagePosition;
    /**
     * Average cost per click.
     * This field can be selected using the value &quot;AverageCpc&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $averageCpc;
    /**
     * Average Cost Per Impression.
     * This field can be selected using the value &quot;AverageCpm&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $averageCpm;
    /**
     * Click Through Rate.
     * This field can be selected using the value &quot;Ctr&quot;.This field can be filtered on.
     * @var string
     */
    public $ctr;
    /**
     * Number of conversions.
     * This field can be selected using the value &quot;Conversions&quot;.This field can be filtered on.
     * @var string
     */
    public $conversions;
    /**
     * Conversion Rate.
     * This field can be selected using the value &quot;ConversionRate&quot;.This field can be filtered on.
     * @var string
     */
    public $conversionRate;
    /**
     * Cost per Conversion.
     * This field can be selected using the value &quot;CostPerConversion&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $costPerConversion;
    /**
     * Number of conversions (many-per-click).
     * This field can be selected using the value &quot;ConversionsManyPerClick&quot;.This field can be filtered on.
     * @var string
     */
    public $conversionsManyPerClick;
    /**
     * Conversion Rate (many-per-click).
     * This field can be selected using the value &quot;ConversionRateManyPerClick&quot;.This field can be filtered on.
     * @var string
     */
    public $conversionRateManyPerClick;
    /**
     * Cost per Conversion (many-per-click).
     * This field can be selected using the value &quot;CostPerConversionManyPerClick&quot;.This field can be filtered on.
     * @var \AdWords\cm\v201109\Money
     */
    public $costPerConversionManyPerClick;
    /**
     * Number of conversions (view-through).
     * This field can be selected using the value &quot;ViewThroughConversions&quot;.This field can be filtered on.
     * @var string
     */
    public $viewThroughConversions;
    /**
     * Total conversion rate.
     * This field can be selected using the value &quot;TotalConvValue&quot;.This field can be filtered on.
     * @var string
     */
    public $totalConvValue;
    /**
     * Value per conversion.
     * This field can be selected using the value &quot;ValuePerConv&quot;.This field can be filtered on.
     * @var string
     */
    public $valuePerConv;
    /**
     * Value per conversion (many per click).
     * This field can be selected using the value &quot;ValuePerConvManyPerClick&quot;.This field can be filtered on.
     * @var string
     */
    public $valuePerConvManyPerClick;
    /**
     * Invalid clicks. Note: This field is valid for campaigns only.
     * This field can be selected using the value &quot;InvalidClicks&quot;.This field can be filtered on.
     * @var string
     */
    public $invalidClicks;
    /**
     * Invalid click rate. Note: This field is valid for campaigns only.
     * This field can be selected using the value &quot;InvalidClickRate&quot;.This field can be filtered on.
     * @var string
     */
    public $invalidClickRate;
    /**
     * Number of calls.
     * This field can be selected using the value &quot;NumCalls&quot;.This field can be filtered on.
     * @var string
     */
    public $numCalls;
    /**
     * Number of missed calls.
     * This field can be selected using the value &quot;NumMissedCalls&quot;.This field can be filtered on.
     * @var string
     */
    public $numMissedCalls;
    /**
     * Number of received calls.
     * This field can be selected using the value &quot;NumReceivedCalls&quot;.This field can be filtered on.
     * @var string
     */
    public $numReceivedCalls;
    /**
     * Total call duration (in seconds) of all calls.
     * This field can be selected using the value &quot;CallDurationSecs&quot;.This field can be filtered on.
     * @var string
     */
    public $callDurationSecs;
    /**
     * Average call duration in seconds.
     * This field can be selected using the value &quot;AvgCallDurationSecs&quot;.This field can be filtered on.
     * @var string
     */
    public $avgCallDurationSecs;
    /**
     * Indicates that this instance is a subtype of Stats.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $StatsType;
    private $_propertyMap = array(
        "Stats.Type" => "StatsType",
    );

    /**
     * Set property with php-incompatible name
     *
     * @param string $var   attribute name to set
     * @param mixed  $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        }
    }

    /**
     * Get property with php-incompatible name
     *
     * @param string $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else {
            return null;
        }
    }
}