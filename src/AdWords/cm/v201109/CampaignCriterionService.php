<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class CampaignCriterionService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                                      => "AdWords\\cm\\v201109\\CampaignCriterionServiceGetResponse",
        "get"                                              => "AdWords\\cm\\v201109\\CampaignCriterionServiceGet",
        "mutate"                                           => "AdWords\\cm\\v201109\\CampaignCriterionServiceMutate",
        "mutateResponse"                                   => "AdWords\\cm\\v201109\\CampaignCriterionServiceMutateResponse",
        "DateTime"                                         => "AdWords\\cm\\v201109\\AdWordsDateTime",
        "SoapHeader"                                       => "AdWords\\cm\\v201109\\SoapHeader",
        "Address"                                          => "AdWords\\cm\\v201109\\Address",
        "AgeRange"                                         => "AdWords\\cm\\v201109\\AgeRange",
        "Criterion"                                        => "AdWords\\cm\\v201109\\Criterion",
        "ApiError"                                         => "AdWords\\cm\\v201109\\ApiError",
        "ApiException"                                     => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                             => "AdWords\\cm\\v201109\\ApplicationException",
        "AuthenticationError"                              => "AdWords\\cm\\v201109\\AuthenticationError",
        "AuthorizationError"                               => "AdWords\\cm\\v201109\\AuthorizationError",
        "CampaignCriterion"                                => "AdWords\\cm\\v201109\\CampaignCriterion",
        "CampaignCriterionError"                           => "AdWords\\cm\\v201109\\CampaignCriterionError",
        "CampaignCriterionLimitExceeded"                   => "AdWords\\cm\\v201109\\CampaignCriterionLimitExceeded",
        "EntityCountLimitExceeded"                         => "AdWords\\cm\\v201109\\EntityCountLimitExceeded",
        "CampaignCriterionOperation"                       => "AdWords\\cm\\v201109\\CampaignCriterionOperation",
        "Operation"                                        => "AdWords\\cm\\v201109\\Operation",
        "CampaignCriterionPage"                            => "AdWords\\cm\\v201109\\CampaignCriterionPage",
        "Page"                                             => "AdWords\\cm\\v201109\\Page",
        "CampaignCriterionReturnValue"                     => "AdWords\\cm\\v201109\\CampaignCriterionReturnValue",
        "ListReturnValue"                                  => "AdWords\\cm\\v201109\\ListReturnValue",
        "Carrier"                                          => "AdWords\\cm\\v201109\\Carrier",
        "ClientTermsError"                                 => "AdWords\\cm\\v201109\\ClientTermsError",
        "ContentLabel"                                     => "AdWords\\cm\\v201109\\ContentLabel",
        "CriterionError"                                   => "AdWords\\cm\\v201109\\CriterionError",
        "DatabaseError"                                    => "AdWords\\cm\\v201109\\DatabaseError",
        "DateRange"                                        => "AdWords\\cm\\v201109\\DateRange",
        "DistinctError"                                    => "AdWords\\cm\\v201109\\DistinctError",
        "EntityNotFound"                                   => "AdWords\\cm\\v201109\\EntityNotFound",
        "Gender"                                           => "AdWords\\cm\\v201109\\Gender",
        "GeoPoint"                                         => "AdWords\\cm\\v201109\\GeoPoint",
        "InternalApiError"                                 => "AdWords\\cm\\v201109\\InternalApiError",
        "Keyword"                                          => "AdWords\\cm\\v201109\\Keyword",
        "Language"                                         => "AdWords\\cm\\v201109\\Language",
        "Location"                                         => "AdWords\\cm\\v201109\\Location",
        "NegativeCampaignCriterion"                        => "AdWords\\cm\\v201109\\NegativeCampaignCriterion",
        "NewEntityCreationError"                           => "AdWords\\cm\\v201109\\NewEntityCreationError",
        "NotEmptyError"                                    => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                              => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                                        => "AdWords\\cm\\v201109\\NullError",
        "OperatingSystemVersion"                           => "AdWords\\cm\\v201109\\OperatingSystemVersion",
        "OperationAccessDenied"                            => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OperatorError"                                    => "AdWords\\cm\\v201109\\OperatorError",
        "OrderBy"                                          => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                                           => "AdWords\\cm\\v201109\\Paging",
        "PagingError"                                      => "AdWords\\cm\\v201109\\PagingError",
        "Placement"                                        => "AdWords\\cm\\v201109\\Placement",
        "Platform"                                         => "AdWords\\cm\\v201109\\Platform",
        "Polygon"                                          => "AdWords\\cm\\v201109\\Polygon",
        "Predicate"                                        => "AdWords\\cm\\v201109\\Predicate",
        "Product"                                          => "AdWords\\cm\\v201109\\Product",
        "ProductCondition"                                 => "AdWords\\cm\\v201109\\ProductCondition",
        "ProductConditionOperand"                          => "AdWords\\cm\\v201109\\ProductConditionOperand",
        "Proximity"                                        => "AdWords\\cm\\v201109\\Proximity",
        "QuotaCheckError"                                  => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RangeError"                                       => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                                => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                                    => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RegionCodeError"                                  => "AdWords\\cm\\v201109\\RegionCodeError",
        "RequestError"                                     => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                                    => "AdWords\\cm\\v201109\\RequiredError",
        "Selector"                                         => "AdWords\\cm\\v201109\\Selector",
        "SelectorError"                                    => "AdWords\\cm\\v201109\\SelectorError",
        "SizeLimitError"                                   => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                               => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StringLengthError"                                => "AdWords\\cm\\v201109\\StringLengthError",
        "CriterionUserInterest"                            => "AdWords\\cm\\v201109\\CriterionUserInterest",
        "CriterionUserList"                                => "AdWords\\cm\\v201109\\CriterionUserList",
        "Vertical"                                         => "AdWords\\cm\\v201109\\Vertical",
        "AgeRange.AgeRangeType"                            => "AdWords\\cm\\v201109\\AgeRangeAgeRangeType",
        "AuthenticationError.Reason"                       => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                        => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "CampaignCriterionError.Reason"                    => "AdWords\\cm\\v201109\\CampaignCriterionErrorReason",
        "CampaignCriterionLimitExceeded.CriteriaLimitType" => "AdWords\\cm\\v201109\\CampaignCriterionLimitExceededCriteriaLimitType",
        "ClientTermsError.Reason"                          => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "ContentLabelType"                                 => "AdWords\\cm\\v201109\\ContentLabelType",
        "Criterion.Type"                                   => "AdWords\\cm\\v201109\\CriterionType",
        "CriterionError.Reason"                            => "AdWords\\cm\\v201109\\CriterionErrorReason",
        "DatabaseError.Reason"                             => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DistinctError.Reason"                             => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"                  => "AdWords\\cm\\v201109\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                            => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "Gender.GenderType"                                => "AdWords\\cm\\v201109\\GenderGenderType",
        "InternalApiError.Reason"                          => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "KeywordMatchType"                                 => "AdWords\\cm\\v201109\\KeywordMatchType",
        "NewEntityCreationError.Reason"                    => "AdWords\\cm\\v201109\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                             => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                       => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                                 => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"                     => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                                         => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"                             => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "PagingError.Reason"                               => "AdWords\\cm\\v201109\\PagingErrorReason",
        "Predicate.Operator"                               => "AdWords\\cm\\v201109\\PredicateOperator",
        "Proximity.DistanceUnits"                          => "AdWords\\cm\\v201109\\ProximityDistanceUnits",
        "QuotaCheckError.Reason"                           => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RangeError.Reason"                                => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                         => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                             => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RegionCodeError.Reason"                           => "AdWords\\cm\\v201109\\RegionCodeErrorReason",
        "RequestError.Reason"                              => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                             => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                             => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "SizeLimitError.Reason"                            => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                                        => "AdWords\\cm\\v201109\\SortOrder",
        "StringLengthError.Reason"                         => "AdWords\\cm\\v201109\\StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"               => "AdWords\\cm\\v201109\\CriterionUserListMembershipStatus",
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
        $options["serviceName"]      = 'CampaignCriterionService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Gets campaign criteria.
     *
     * @param Selector serviceSelector the selector specifying the {@link CampaignCriterion}s to return.
     *
     * @return CampaignCriterionPage a list of campaign criteria
     * @throws ApiException when there is at least one error with the request
     */
    public function get($serviceSelector)
    {
        $arg    = new CampaignCriterionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * Adds, removes or updates campaign criteria.
     *
     * @param CampaignCriterionOperation[] operations the operations to do
     *
     * @return CampaignCriterionReturnValue the added campaign criteria (without any optional parts)
     * @throws ApiException when there is at least one error with the request
     */
    public function mutate($operations)
    {
        $arg    = new CampaignCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }


}

class CampaignCriterionServiceGet
{
    /**
     * @var Selector
     */
    public $serviceSelector;

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }
}

class CampaignCriterionServiceGetResponse
{
    /**
     * @var CampaignCriterionPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class CampaignCriterionServiceMutate
{
    /**
     * @var CampaignCriterionOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class CampaignCriterionServiceMutateResponse
{
    /**
     * @var CampaignCriterionReturnValue
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}