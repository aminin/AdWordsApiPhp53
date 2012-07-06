<?php

/**
 * Usage stats about a single {@link ConversionTracker}.
 */
class ConversionTrackerStats {
    /**
     * @var integer
     */
    public $numConversionEvents;

    /**
     * @var Money
     */
    public $conversionValue;

    /**
     * @var string
     */
    public $mostRecentConversionDate;

    /**
     * @var integer
     */
    public $numConvertedClicks;

    public function __construct($numConversionEvents = NULL, $conversionValue = NULL, $mostRecentConversionDate = NULL, $numConvertedClicks = NULL) {
        $this->numConversionEvents = $numConversionEvents;
        $this->conversionValue = $conversionValue;
        $this->mostRecentConversionDate = $mostRecentConversionDate;
        $this->numConvertedClicks = $numConvertedClicks;
    }
}
