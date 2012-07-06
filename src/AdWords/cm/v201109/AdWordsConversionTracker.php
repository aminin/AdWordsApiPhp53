<?php

namespace AdWords\cm\v201109;


class AdWordsConversionTracker extends ConversionTracker {
    /**
     * @var string
     */
    public $snippet;

    /**
     * @var AdWordsConversionTrackerMarkupLanguage
     */
    public $markupLanguage;

    /**
     * @var AdWordsConversionTrackerHttpProtocol
     */
    public $httpProtocol;

    /**
     * @var AdWordsConversionTrackerTextFormat
     */
    public $textFormat;

    /**
     * @var string
     */
    public $conversionPageLanguage;

    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $userRevenueValue;


    public function __construct($snippet = NULL, $markupLanguage = NULL, $httpProtocol = NULL, $textFormat = NULL, $conversionPageLanguage = NULL, $backgroundColor = NULL, $userRevenueValue = NULL, $id = NULL, $name = NULL, $status = NULL, $category = NULL, $stats = NULL, $viewthroughLookbackWindow = NULL, $viewthroughConversionDeDupSearch = NULL, $isProductAdsChargeable = NULL, $productAdsChargeableConversionWindow = NULL, $ConversionTrackerType = NULL) {
        $this->snippet = $snippet;
        $this->markupLanguage = $markupLanguage;
        $this->httpProtocol = $httpProtocol;
        $this->textFormat = $textFormat;
        $this->conversionPageLanguage = $conversionPageLanguage;
        $this->backgroundColor = $backgroundColor;
        $this->userRevenueValue = $userRevenueValue;
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
 * Text format to display on the conversion page.
 */
class AdWordsConversionTrackerTextFormat
{

}

/**
 * Controls the markup language in which the snippet will be written.
 */
class AdWordsConversionTrackerMarkupLanguage {

}

/**
 * HTTP protocol used on the conversion page.
 */
class AdWordsConversionTrackerHttpProtocol
{
}
