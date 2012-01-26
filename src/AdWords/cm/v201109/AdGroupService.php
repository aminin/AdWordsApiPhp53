<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class AdGroupService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                              => "AdWords\\cm\\v201109\\AdGroupServiceGetResponse",
        "get"                                      => "AdWords\\cm\\v201109\\AdGroupServiceGet",
        "mutate"                                   => "AdWords\\cm\\v201109\\AdGroupServiceMutate",
        "mutateResponse"                           => "AdWords\\cm\\v201109\\AdGroupServiceMutateResponse",
        "SoapHeader"                               => "AdWords\\cm\\v201109\\SoapHeader",
        "AdGroupServiceError"                      => "AdWords\\cm\\v201109\\AdGroupServiceError",
        "ApiError"                                 => "AdWords\\cm\\v201109\\ApiError",
        "AuthenticationError"                      => "AdWords\\cm\\v201109\\AuthenticationError",
        "AuthorizationError"                       => "AdWords\\cm\\v201109\\AuthorizationError",
        "BiddingError"                             => "AdWords\\cm\\v201109\\BiddingError",
        "ClientTermsError"                         => "AdWords\\cm\\v201109\\ClientTermsError",
        "DateError"                                => "AdWords\\cm\\v201109\\DateError",
        "DateRange"                                => "AdWords\\cm\\v201109\\DateRange",
        "DistinctError"                            => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                              => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                              => "AdWords\\cm\\v201109\\NumberValue",
        "EntityNotFound"                           => "AdWords\\cm\\v201109\\EntityNotFound",
        "InternalApiError"                         => "AdWords\\cm\\v201109\\InternalApiError",
        "LongValue"                                => "AdWords\\cm\\v201109\\LongValue",
        "Money"                                    => "AdWords\\cm\\v201109\\Money",
        "ComparableValue"                          => "AdWords\\cm\\v201109\\ComparableValue",
        "NewEntityCreationError"                   => "AdWords\\cm\\v201109\\NewEntityCreationError",
        "NotEmptyError"                            => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                      => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                                => "AdWords\\cm\\v201109\\NullError",
        "OperationAccessDenied"                    => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OperatorError"                            => "AdWords\\cm\\v201109\\OperatorError",
        "OrderBy"                                  => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                                   => "AdWords\\cm\\v201109\\Paging",
        "PercentCPAAdGroupBids"                    => "AdWords\\cm\\v201109\\PercentCPAAdGroupBids",
        "AdGroupBids"                              => "AdWords\\cm\\v201109\\AdGroupBids",
        "Predicate"                                => "AdWords\\cm\\v201109\\Predicate",
        "QuotaCheckError"                          => "AdWords\\cm\\v201109\\QuotaCheckError",
        "QuotaError"                               => "AdWords\\cm\\v201109\\QuotaError",
        "RangeError"                               => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                        => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                            => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RejectedError"                            => "AdWords\\cm\\v201109\\RejectedError",
        "RequestError"                             => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                            => "AdWords\\cm\\v201109\\RequiredError",
        "SelectorError"                            => "AdWords\\cm\\v201109\\SelectorError",
        "SizeLimitError"                           => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                       => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StatsQueryError"                          => "AdWords\\cm\\v201109\\StatsQueryError",
        "DatabaseError"                            => "AdWords\\cm\\v201109\\DatabaseError",
        "Selector"                                 => "AdWords\\cm\\v201109\\Selector",
        "Stats"                                    => "AdWords\\cm\\v201109\\Stats",
        "ApiException"                             => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                     => "AdWords\\cm\\v201109\\ApplicationException",
        "Bid"                                      => "AdWords\\cm\\v201109\\Bid",
        "BidMultiplier"                            => "AdWords\\cm\\v201109\\BidMultiplier",
        "BudgetOptimizerAdGroupBids"               => "AdWords\\cm\\v201109\\BudgetOptimizerAdGroupBids",
        "ConversionOptimizerAdGroupBids"           => "AdWords\\cm\\v201109\\ConversionOptimizerAdGroupBids",
        "ManualCPCAdGroupBids"                     => "AdWords\\cm\\v201109\\ManualCPCAdGroupBids",
        "ManualCPCAdGroupExperimentBidMultipliers" => "AdWords\\cm\\v201109\\ManualCPCAdGroupExperimentBidMultipliers",
        "AdGroupExperimentBidMultipliers"          => "AdWords\\cm\\v201109\\AdGroupExperimentBidMultipliers",
        "ManualCPMAdGroupBids"                     => "AdWords\\cm\\v201109\\ManualCPMAdGroupBids",
        "ManualCPMAdGroupExperimentBidMultipliers" => "AdWords\\cm\\v201109\\ManualCPMAdGroupExperimentBidMultipliers",
        "AdGroupExperimentData"                    => "AdWords\\cm\\v201109\\AdGroupExperimentData",
        "AdGroup"                                  => "AdWords\\cm\\v201109\\AdGroup",
        "AdGroupOperation"                         => "AdWords\\cm\\v201109\\AdGroupOperation",
        "Operation"                                => "AdWords\\cm\\v201109\\Operation",
        "AdGroupPage"                              => "AdWords\\cm\\v201109\\AdGroupPage",
        "Page"                                     => "AdWords\\cm\\v201109\\Page",
        "AdGroupReturnValue"                       => "AdWords\\cm\\v201109\\AdGroupReturnValue",
        "ListReturnValue"                          => "AdWords\\cm\\v201109\\ListReturnValue",
        "AdGroup.Status"                           => "AdWords\\cm\\v201109\\AdGroupStatus",
        "AdGroupServiceError.Reason"               => "AdWords\\cm\\v201109\\AdGroupServiceErrorReason",
        "AuthenticationError.Reason"               => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "BiddingError.Reason"                      => "AdWords\\cm\\v201109\\BiddingErrorReason",
        "ClientTermsError.Reason"                  => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "ConversionDeduplicationMode"              => "AdWords\\cm\\v201109\\ConversionDeduplicationMode",
        "ConversionOptimizerBidType"               => "AdWords\\cm\\v201109\\ConversionOptimizerBidType",
        "DatabaseError.Reason"                     => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                         => "AdWords\\cm\\v201109\\DateErrorReason",
        "DistinctError.Reason"                     => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityNotFound.Reason"                    => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "ExperimentDataStatus"                     => "AdWords\\cm\\v201109\\ExperimentDataStatus",
        "ExperimentDeltaStatus"                    => "AdWords\\cm\\v201109\\ExperimentDeltaStatus",
        "InternalApiError.Reason"                  => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "NewEntityCreationError.Reason"            => "AdWords\\cm\\v201109\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                     => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"               => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                         => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"             => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                                 => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"                     => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "Predicate.Operator"                       => "AdWords\\cm\\v201109\\PredicateOperator",
        "QuotaCheckError.Reason"                   => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "QuotaError.Reason"                        => "AdWords\\cm\\v201109\\QuotaErrorReason",
        "RangeError.Reason"                        => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                 => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                     => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RejectedError.Reason"                     => "AdWords\\cm\\v201109\\RejectedErrorReason",
        "RequestError.Reason"                      => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                     => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                     => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "SizeLimitError.Reason"                    => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                                => "AdWords\\cm\\v201109\\SortOrder",
        "Stats.Network"                            => "AdWords\\cm\\v201109\\StatsNetwork",
        "StatsQueryError.Reason"                   => "AdWords\\cm\\v201109\\StatsQueryErrorReason",
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
        $options["serviceName"]      = 'AdGroupService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of all the ad groups specified by the selector
     * from the target customer's account.
     *
     * @param Selector serviceSelector The selector specifying the {@link AdGroup}s to return.
     *
     * @return AdGroupPage List of adgroups identified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $arg    = new AdGroupServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

    /**
     * Adds, updates, or deletes ad groups.
     * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
     * {@code REMOVE} operator. To delete an ad group, set its
     * {@link AdGroup#status status} to {@code DELETED}.</p>
     *
     * @param AdGroupOperation[] operations List of unique operations. The same ad group cannot be
     * specified in more than one operation.
     *
     * @return AdGroupReturnValue The updated adgroups.
     */
    public function mutate($operations)
    {
        $arg    = new AdGroupServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }
}

class AdGroupServiceGet
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

class AdGroupServiceGetResponse
{
    /**
     * @var AdGroupPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class AdGroupServiceMutate
{
    /**
     * @var AdGroupOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class AdGroupServiceMutateResponse
{
    /**
     * @var AdGroupReturnValue
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}