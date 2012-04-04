<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class LocationCriterionService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    public static $classmap = array(
        "getResponse"                          => "AdWords\\cm\\v201109\\LocationCriterionServiceGetResponse",
        "get"                                  => "AdWords\\cm\\v201109\\LocationCriterionServiceGet",
        "DateTime"                             => "AdWords\\cm\\v201109\\AdWordsDateTime",
        "SoapHeader"                           => "AdWords\\cm\\v201109\\SoapHeader",
        "AdError"                              => "AdWords\\cm\\v201109\\AdError",
        "ApiError"                             => "AdWords\\cm\\v201109\\ApiError",
        "AdExtensionOverrideStats"             => "AdWords\\cm\\v201109\\AdExtensionOverrideStats",
        "Stats"                                => "AdWords\\cm\\v201109\\Stats",
        "AdGroupAdCountLimitExceeded"          => "AdWords\\cm\\v201109\\AdGroupAdCountLimitExceeded",
        "EntityCountLimitExceeded"             => "AdWords\\cm\\v201109\\EntityCountLimitExceeded",
        "AdGroupAdError"                       => "AdWords\\cm\\v201109\\AdGroupAdError",
        "AdStats"                              => "AdWords\\cm\\v201109\\AdStats",
        "Audio"                                => "AdWords\\cm\\v201109\\Audio",
        "Media"                                => "AdWords\\cm\\v201109\\Media",
        "AuthenticationError"                  => "AdWords\\cm\\v201109\\AuthenticationError",
        "AuthorizationError"                   => "AdWords\\cm\\v201109\\AuthorizationError",
        "ClientTermsError"                     => "AdWords\\cm\\v201109\\ClientTermsError",
        "DateError"                            => "AdWords\\cm\\v201109\\DateError",
        "DateRange"                            => "AdWords\\cm\\v201109\\DateRange",
        "DeprecatedAd"                         => "AdWords\\cm\\v201109\\DeprecatedAd",
        "Ad"                                   => "AdWords\\cm\\v201109\\Ad",
        "Dimensions"                           => "AdWords\\cm\\v201109\\Dimensions",
        "DistinctError"                        => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                          => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                          => "AdWords\\cm\\v201109\\NumberValue",
        "EntityNotFound"                       => "AdWords\\cm\\v201109\\EntityNotFound",
        "IdError"                              => "AdWords\\cm\\v201109\\IdError",
        "Image"                                => "AdWords\\cm\\v201109\\Image",
        "ImageError"                           => "AdWords\\cm\\v201109\\ImageError",
        "InternalApiError"                     => "AdWords\\cm\\v201109\\InternalApiError",
        "LongValue"                            => "AdWords\\cm\\v201109\\LongValue",
        "MediaError"                           => "AdWords\\cm\\v201109\\MediaError",
        "Media_Size_DimensionsMapEntry"        => "AdWords\\cm\\v201109\\Media_Size_DimensionsMapEntry",
        "Media_Size_StringMapEntry"            => "AdWords\\cm\\v201109\\Media_Size_StringMapEntry",
        "MobileAd"                             => "AdWords\\cm\\v201109\\MobileAd",
        "NewEntityCreationError"               => "AdWords\\cm\\v201109\\NewEntityCreationError",
        "NotEmptyError"                        => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                  => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                            => "AdWords\\cm\\v201109\\NullError",
        "ComparableValue"                      => "AdWords\\cm\\v201109\\ComparableValue",
        "OperationAccessDenied"                => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OrderBy"                              => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                               => "AdWords\\cm\\v201109\\Paging",
        "PagingError"                          => "AdWords\\cm\\v201109\\PagingError",
        "PolicyViolationError.Part"            => "AdWords\\cm\\v201109\\PolicyViolationErrorPart",
        "PolicyViolationKey"                   => "AdWords\\cm\\v201109\\PolicyViolationKey",
        "Predicate"                            => "AdWords\\cm\\v201109\\Predicate",
        "ProductAd"                            => "AdWords\\cm\\v201109\\ProductAd",
        "QuotaCheckError"                      => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RangeError"                           => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                    => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                        => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RequestError"                         => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                        => "AdWords\\cm\\v201109\\RequiredError",
        "SelectorError"                        => "AdWords\\cm\\v201109\\SelectorError",
        "SizeLimitError"                       => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                   => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StatsQueryError"                      => "AdWords\\cm\\v201109\\StatsQueryError",
        "TempAdUnionId"                        => "AdWords\\cm\\v201109\\TempAdUnionId",
        "AdUnionId"                            => "AdWords\\cm\\v201109\\AdUnionId",
        "TextAd"                               => "AdWords\\cm\\v201109\\TextAd",
        "ThirdPartyRedirectAd"                 => "AdWords\\cm\\v201109\\ThirdPartyRedirectAd",
        "RichMediaAd"                          => "AdWords\\cm\\v201109\\RichMediaAd",
        "Video"                                => "AdWords\\cm\\v201109\\Video",
        "AdGroupAdExperimentData"              => "AdWords\\cm\\v201109\\AdGroupAdExperimentData",
        "DatabaseError"                        => "AdWords\\cm\\v201109\\DatabaseError",
        "ExemptionRequest"                     => "AdWords\\cm\\v201109\\ExemptionRequest",
        "Money"                                => "AdWords\\cm\\v201109\\Money",
        "PolicyViolationError"                 => "AdWords\\cm\\v201109\\PolicyViolationError",
        "Selector"                             => "AdWords\\cm\\v201109\\Selector",
        "ApiException"                         => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                 => "AdWords\\cm\\v201109\\ApplicationException",
        "MobileImageAd"                        => "AdWords\\cm\\v201109\\MobileImageAd",
        "TemplateElementField"                 => "AdWords\\cm\\v201109\\TemplateElementField",
        "ImageAd"                              => "AdWords\\cm\\v201109\\ImageAd",
        "TemplateElement"                      => "AdWords\\cm\\v201109\\TemplateElement",
        "TemplateAd"                           => "AdWords\\cm\\v201109\\TemplateAd",
        "AdGroupAd"                            => "AdWords\\cm\\v201109\\AdGroupAd",
        "AdGroupAdOperation"                   => "AdWords\\cm\\v201109\\AdGroupAdOperation",
        "Operation"                            => "AdWords\\cm\\v201109\\Operation",
        "AdGroupAdPage"                        => "AdWords\\cm\\v201109\\AdGroupAdPage",
        "Page"                                 => "AdWords\\cm\\v201109\\Page",
        "AdGroupAdReturnValue"                 => "AdWords\\cm\\v201109\\AdGroupAdReturnValue",
        "ListReturnValue"                      => "AdWords\\cm\\v201109\\ListReturnValue",
        "Ad.ApprovalStatus"                    => "AdWords\\cm\\v201109\\AdApprovalStatus",
        "AdError.Reason"                       => "AdWords\\cm\\v201109\\AdErrorReason",
        "AdGroupAd.Status"                     => "AdWords\\cm\\v201109\\AdGroupAdStatus",
        "AdGroupAdError.Reason"                => "AdWords\\cm\\v201109\\AdGroupAdErrorReason",
        "AuthenticationError.Reason"           => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"            => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "ClientTermsError.Reason"              => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "DatabaseError.Reason"                 => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                     => "AdWords\\cm\\v201109\\DateErrorReason",
        "DeprecatedAd.Type"                    => "AdWords\\cm\\v201109\\DeprecatedAdType",
        "DistinctError.Reason"                 => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"      => "AdWords\\cm\\v201109\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "ExperimentDataStatus"                 => "AdWords\\cm\\v201109\\ExperimentDataStatus",
        "ExperimentDeltaStatus"                => "AdWords\\cm\\v201109\\ExperimentDeltaStatus",
        "IdError.Reason"                       => "AdWords\\cm\\v201109\\IdErrorReason",
        "ImageError.Reason"                    => "AdWords\\cm\\v201109\\ImageErrorReason",
        "InternalApiError.Reason"              => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "MarkupLanguageType"                   => "AdWords\\cm\\v201109\\MarkupLanguageType",
        "Media.MediaType"                      => "AdWords\\cm\\v201109\\MediaMediaType",
        "Media.MimeType"                       => "AdWords\\cm\\v201109\\MediaMimeType",
        "Media.Size"                           => "AdWords\\cm\\v201109\\MediaSize",
        "MediaError.Reason"                    => "AdWords\\cm\\v201109\\MediaErrorReason",
        "NewEntityCreationError.Reason"        => "AdWords\\cm\\v201109\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                 => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"           => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                     => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"         => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                             => "AdWords\\cm\\v201109\\Operator",
        "PagingError.Reason"                   => "AdWords\\cm\\v201109\\PagingErrorReason",
        "Predicate.Operator"                   => "AdWords\\cm\\v201109\\PredicateOperator",
        "QuotaCheckError.Reason"               => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RangeError.Reason"                    => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"             => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                 => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RequestError.Reason"                  => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                 => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                 => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "SizeLimitError.Reason"                => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                            => "AdWords\\cm\\v201109\\SortOrder",
        "Stats.Network"                        => "AdWords\\cm\\v201109\\StatsNetwork",
        "StatsQueryError.Reason"               => "AdWords\\cm\\v201109\\StatsQueryErrorReason",
        "TemplateElementField.Type"            => "AdWords\\cm\\v201109\\TemplateElementFieldType",
        "VideoType"                            => "AdWords\\cm\\v201109\\VideoType",
        "Date"                                 => "AdWords\\cm\\v201109\\Date",
        "LocationCriterion"                    => "AdWords\\cm\\v201109\\LocationCriterion",
        "LocationCriterionServiceError"        => "AdWords\\cm\\v201109\\LocationCriterionServiceError",
        "LocationCriterionServiceError.Reason" => "AdWords\\cm\\v201109\\LocationCriterionServiceErrorReason",
    );

    /**
     * Constructor using wsdl location and options array
     *
     * @param string        $wsdl    WSDL location for this service
     * @param array         $options Options for the SoapClient
     */
    public function __construct($wsdl, $options)
    {
        $options["classmap"]         = self::$classmap;
        $options["serviceName"]      = 'LocationCriterionService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of LocationCriterion.
     *
     * @param Selector $serviceSelector filters the LocationCriterion to be returned.
     *
     * @return LocationCriterion[] A list of location criterion.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $arg    = new LocationCriterionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }
}

class LocationCriterionServiceGet
{
    /**
     * @var Selector
     */
    public $selector;

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}

class LocationCriterionServiceGetResponse
{
    /**
     * @var LocationCriterion[]
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}