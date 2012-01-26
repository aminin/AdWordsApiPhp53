<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class AdGroupCriterionService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                      => "AdWords\\cm\\v201109\\AdGroupCriterionServiceGetResponse",
        "get"                                              => "AdWords\\cm\\v201109\\AdGroupCriterionServiceGet",
        "mutate"                                           => "AdWords\\cm\\v201109\\AdGroupCriterionServiceMutate",
        "mutateResponse"                                   => "AdWords\\cm\\v201109\\AdGroupCriterionServiceMutateResponse",
        "SoapHeader"                                       => "AdWords\\cm\\v201109\\SoapHeader",
        "AdGroupCriterionError"                            => "AdWords\\cm\\v201109\\AdGroupCriterionError",
        "ApiError"                                         => "AdWords\\cm\\v201109\\ApiError",
        "AdGroupCriterionLimitExceeded"                    => "AdWords\\cm\\v201109\\AdGroupCriterionLimitExceeded",
        "EntityCountLimitExceeded"                         => "AdWords\\cm\\v201109\\EntityCountLimitExceeded",
        "AuthenticationError"                              => "AdWords\\cm\\v201109\\AuthenticationError",
        "AuthorizationError"                               => "AdWords\\cm\\v201109\\AuthorizationError",
        "BiddingError"                                     => "AdWords\\cm\\v201109\\BiddingError",
        "ClientTermsError"                                 => "AdWords\\cm\\v201109\\ClientTermsError",
        "ConversionOptimizerAdGroupCriterionBids"          => "AdWords\\cm\\v201109\\ConversionOptimizerAdGroupCriterionBids",
        "AdGroupCriterionBids"                             => "AdWords\\cm\\v201109\\AdGroupCriterionBids",
        "CriterionError"                                   => "AdWords\\cm\\v201109\\CriterionError",
        "CriterionPolicyError"                             => "AdWords\\cm\\v201109\\CriterionPolicyError",
        "PolicyViolationError"                             => "AdWords\\cm\\v201109\\PolicyViolationError",
        "DateError"                                        => "AdWords\\cm\\v201109\\DateError",
        "DateRange"                                        => "AdWords\\cm\\v201109\\DateRange",
        "DistinctError"                                    => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                                      => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                                      => "AdWords\\cm\\v201109\\NumberValue",
        "EntityAccessDenied"                               => "AdWords\\cm\\v201109\\EntityAccessDenied",
        "EntityNotFound"                                   => "AdWords\\cm\\v201109\\EntityNotFound",
        "InternalApiError"                                 => "AdWords\\cm\\v201109\\InternalApiError",
        "Keyword"                                          => "AdWords\\cm\\v201109\\Keyword",
        "Criterion"                                        => "AdWords\\cm\\v201109\\Criterion",
        "LongValue"                                        => "AdWords\\cm\\v201109\\LongValue",
        "Money"                                            => "AdWords\\cm\\v201109\\Money",
        "ComparableValue"                                  => "AdWords\\cm\\v201109\\ComparableValue",
        "NegativeAdGroupCriterion"                         => "AdWords\\cm\\v201109\\NegativeAdGroupCriterion",
        "AdGroupCriterion"                                 => "AdWords\\cm\\v201109\\AdGroupCriterion",
        "NewEntityCreationError"                           => "AdWords\\cm\\v201109\\NewEntityCreationError",
        "NotEmptyError"                                    => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                              => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                                        => "AdWords\\cm\\v201109\\NullError",
        "OperationAccessDenied"                            => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OrderBy"                                          => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                                           => "AdWords\\cm\\v201109\\Paging",
        "PagingError"                                      => "AdWords\\cm\\v201109\\PagingError",
        "PercentCPAAdGroupCriterionBids"                   => "AdWords\\cm\\v201109\\PercentCPAAdGroupCriterionBids",
        "Placement"                                        => "AdWords\\cm\\v201109\\Placement",
        "PolicyViolationError.Part"                        => "AdWords\\cm\\v201109\\PolicyViolationErrorPart",
        "PolicyViolationKey"                               => "AdWords\\cm\\v201109\\PolicyViolationKey",
        "Predicate"                                        => "AdWords\\cm\\v201109\\Predicate",
        "ProductConditionOperand"                          => "AdWords\\cm\\v201109\\ProductConditionOperand",
        "QualityInfo"                                      => "AdWords\\cm\\v201109\\QualityInfo",
        "QuotaCheckError"                                  => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RangeError"                                       => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                                => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                                    => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RejectedError"                                    => "AdWords\\cm\\v201109\\RejectedError",
        "RequestError"                                     => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                                    => "AdWords\\cm\\v201109\\RequiredError",
        "SelectorError"                                    => "AdWords\\cm\\v201109\\SelectorError",
        "SizeLimitError"                                   => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                               => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StatsQueryError"                                  => "AdWords\\cm\\v201109\\StatsQueryError",
        "CriterionUserInterest"                            => "AdWords\\cm\\v201109\\CriterionUserInterest",
        "CriterionUserList"                                => "AdWords\\cm\\v201109\\CriterionUserList",
        "Vertical"                                         => "AdWords\\cm\\v201109\\Vertical",
        "DatabaseError"                                    => "AdWords\\cm\\v201109\\DatabaseError",
        "ExemptionRequest"                                 => "AdWords\\cm\\v201109\\ExemptionRequest",
        "ProductCondition"                                 => "AdWords\\cm\\v201109\\ProductCondition",
        "Selector"                                         => "AdWords\\cm\\v201109\\Selector",
        "Stats"                                            => "AdWords\\cm\\v201109\\Stats",
        "ApiException"                                     => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                             => "AdWords\\cm\\v201109\\ApplicationException",
        "Bid"                                              => "AdWords\\cm\\v201109\\Bid",
        "BidMultiplier"                                    => "AdWords\\cm\\v201109\\BidMultiplier",
        "BudgetOptimizerAdGroupCriterionBids"              => "AdWords\\cm\\v201109\\BudgetOptimizerAdGroupCriterionBids",
        "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "AdWords\\cm\\v201109\\ManualCPCAdGroupCriterionExperimentBidMultiplier",
        "AdGroupCriterionExperimentBidMultiplier"          => "AdWords\\cm\\v201109\\AdGroupCriterionExperimentBidMultiplier",
        "ManualCPMAdGroupCriterionBids"                    => "AdWords\\cm\\v201109\\ManualCPMAdGroupCriterionBids",
        "Product"                                          => "AdWords\\cm\\v201109\\Product",
        "BiddableAdGroupCriterionExperimentData"           => "AdWords\\cm\\v201109\\BiddableAdGroupCriterionExperimentData",
        "ManualCPCAdGroupCriterionBids"                    => "AdWords\\cm\\v201109\\ManualCPCAdGroupCriterionBids",
        "BiddableAdGroupCriterion"                         => "AdWords\\cm\\v201109\\BiddableAdGroupCriterion",
        "AdGroupCriterionOperation"                        => "AdWords\\cm\\v201109\\AdGroupCriterionOperation",
        "Operation"                                        => "AdWords\\cm\\v201109\\Operation",
        "AdGroupCriterionPage"                             => "AdWords\\cm\\v201109\\AdGroupCriterionPage",
        "Page"                                             => "AdWords\\cm\\v201109\\Page",
        "AdGroupCriterionReturnValue"                      => "AdWords\\cm\\v201109\\AdGroupCriterionReturnValue",
        "ListReturnValue"                                  => "AdWords\\cm\\v201109\\ListReturnValue",
        "AdGroupCriterionError.Reason"                     => "AdWords\\cm\\v201109\\AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType"  => "AdWords\\cm\\v201109\\AdGroupCriterionLimitExceededCriteriaLimitType",
        "ApprovalStatus"                                   => "AdWords\\cm\\v201109\\ApprovalStatus",
        "AuthenticationError.Reason"                       => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                        => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "BidSource"                                        => "AdWords\\cm\\v201109\\BidSource",
        "BiddingError.Reason"                              => "AdWords\\cm\\v201109\\BiddingErrorReason",
        "ClientTermsError.Reason"                          => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "Criterion.Type"                                   => "AdWords\\cm\\v201109\\CriterionType",
        "CriterionError.Reason"                            => "AdWords\\cm\\v201109\\CriterionErrorReason",
        "CriterionUse"                                     => "AdWords\\cm\\v201109\\CriterionUse",
        "DatabaseError.Reason"                             => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                                 => "AdWords\\cm\\v201109\\DateErrorReason",
        "DistinctError.Reason"                             => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityAccessDenied.Reason"                        => "AdWords\\cm\\v201109\\EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"                  => "AdWords\\cm\\v201109\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                            => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "ExperimentDataStatus"                             => "AdWords\\cm\\v201109\\ExperimentDataStatus",
        "ExperimentDeltaStatus"                            => "AdWords\\cm\\v201109\\ExperimentDeltaStatus",
        "InternalApiError.Reason"                          => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "KeywordMatchType"                                 => "AdWords\\cm\\v201109\\KeywordMatchType",
        "MultiplierSource"                                 => "AdWords\\cm\\v201109\\MultiplierSource",
        "NewEntityCreationError.Reason"                    => "AdWords\\cm\\v201109\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                             => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                       => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                                 => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"                     => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                                         => "AdWords\\cm\\v201109\\Operator",
        "PagingError.Reason"                               => "AdWords\\cm\\v201109\\PagingErrorReason",
        "Predicate.Operator"                               => "AdWords\\cm\\v201109\\PredicateOperator",
        "QuotaCheckError.Reason"                           => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RangeError.Reason"                                => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                         => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                             => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RejectedError.Reason"                             => "AdWords\\cm\\v201109\\RejectedErrorReason",
        "RequestError.Reason"                              => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                             => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                             => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "SizeLimitError.Reason"                            => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                                        => "AdWords\\cm\\v201109\\SortOrder",
        "Stats.Network"                                    => "AdWords\\cm\\v201109\\StatsNetwork",
        "StatsQueryError.Reason"                           => "AdWords\\cm\\v201109\\StatsQueryErrorReason",
        "SystemServingStatus"                              => "AdWords\\cm\\v201109\\SystemServingStatus",
        "CriterionUserList.MembershipStatus"               => "AdWords\\cm\\v201109\\CriterionUserListMembershipStatus",
        "UserStatus"                                       => "AdWords\\cm\\v201109\\UserStatus",
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
        $options["serviceName"]      = 'AdGroupCriterionService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Gets adgroup criteria.
     *
     * @param Selector serviceSelector filters the adgroup criteria to be returned.
     *
     * @return AdGroupCriterionPage a page (subset) view of the criteria selected
     * @throws ApiException when there is at least one error with the request
     */
    public function get($serviceSelector)
    {
        $arg    = new AdGroupCriterionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

    /**
     * Adds, removes or updates adgroup criteria.
     *
     * @param AdGroupCriterionOperation[] operations operations to do
     *                                               during checks on keywords to be added.
     *
     * @return AdGroupCriterionReturnValue added and updated adgroup criteria (without optional parts)
     * @throws ApiException when there is at least one error with the request
     */
    public function mutate($operations)
    {
        $arg    = new AdGroupCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }
}

class AdGroupCriterionServiceGet
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

class AdGroupCriterionServiceGetResponse
{
    /**
     * @var AdGroupCriterionPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class AdGroupCriterionServiceMutate
{
    /**
     * @var AdGroupCriterionOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class AdGroupCriterionServiceMutateResponse
{
    /**
     * @var AdGroupCriterionReturnValue
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}