<?php

namespace AdWords\cm\v201109;
/**
 * An abstract Conversion base class.
 */
class ConversionTracker
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ConversionTrackerStatus
     */
    public $status;

    /**
     * @var ConversionTrackerCategory
     */
    public $category;

    /**
     * @var ConversionTrackerStats
     */
    public $stats;

    /**
     * @var integer
     */
    public $viewthroughLookbackWindow;

    /**
     * @var boolean
     */
    public $viewthroughConversionDeDupSearch;

    /**
     * @var boolean
     */
    public $isProductAdsChargeable;

    /**
     * @var integer
     */
    public $productAdsChargeableConversionWindow;

    /**
     * @var string
     */
    public $ConversionTrackerType;

    private $_parameterMap = array(
        "ConversionTracker.Type" => "ConversionTrackerType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!array_key_exists($var, $this->_parameterMap)) {
            return NULL;
        } else {
            return $this->{$this->_parameterMap[$var]};
        }
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }


    public function __construct($id = NULL, $name = NULL, $status = NULL, $category = NULL, $stats = NULL, $viewthroughLookbackWindow = NULL, $viewthroughConversionDeDupSearch = NULL, $isProductAdsChargeable = NULL, $productAdsChargeableConversionWindow = NULL, $ConversionTrackerType = NULL)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->viewthroughConversionDeDupSearch = $viewthroughConversionDeDupSearch;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}

/**
 * Status of the conversion tracker.
 */
class ConversionTrackerStatus {

}