<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class CampaignService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                                    => "AdWords\\cm\\v201109\\CampaignServiceGetResponse",
        "get"                                            => "AdWords\\cm\\v201109\\CampaignServiceGet",
        "mutate"                                         => "AdWords\\cm\\v201109\\CampaignServiceMutate",
        "mutateResponse"                                 => "AdWords\\cm\\v201109\\CampaignServiceMutateResponse",
        "SoapHeader"                                     => "AdWords\\cm\\v201109\\SoapHeader",
        "AuthenticationError"                            => "AdWords\\cm\\v201109\\AuthenticationError",
        "ApiError"                                       => "AdWords\\cm\\v201109\\ApiError",
        "AuthorizationError"                             => "AdWords\\cm\\v201109\\AuthorizationError",
        "BiddingError"                                   => "AdWords\\cm\\v201109\\BiddingError",
        "BiddingTransitionError"                         => "AdWords\\cm\\v201109\\BiddingTransitionError",
        "BudgetError"                                    => "AdWords\\cm\\v201109\\BudgetError",
        "CampaignError"                                  => "AdWords\\cm\\v201109\\CampaignError",
        "CampaignStats"                                  => "AdWords\\cm\\v201109\\CampaignStats",
        "Stats"                                          => "AdWords\\cm\\v201109\\Stats",
        "ClientTermsError"                               => "AdWords\\cm\\v201109\\ClientTermsError",
        "ConversionOptimizer"                            => "AdWords\\cm\\v201109\\ConversionOptimizer",
        "BiddingStrategy"                                => "AdWords\\cm\\v201109\\BiddingStrategy",
        "ConversionOptimizerBiddingTransition"           => "AdWords\\cm\\v201109\\ConversionOptimizerBiddingTransition",
        "BiddingTransition"                              => "AdWords\\cm\\v201109\\BiddingTransition",
        "ConversionOptimizerEligibility"                 => "AdWords\\cm\\v201109\\ConversionOptimizerEligibility",
        "DateError"                                      => "AdWords\\cm\\v201109\\DateError",
        "DateRange"                                      => "AdWords\\cm\\v201109\\DateRange",
        "DistinctError"                                  => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                                    => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                                    => "AdWords\\cm\\v201109\\NumberValue",
        "EntityNotFound"                                 => "AdWords\\cm\\v201109\\EntityNotFound",
        "FrequencyCap"                                   => "AdWords\\cm\\v201109\\FrequencyCap",
        "GeoTargetTypeSetting"                           => "AdWords\\cm\\v201109\\GeoTargetTypeSetting",
        "Setting"                                        => "AdWords\\cm\\v201109\\Setting",
        "InternalApiError"                               => "AdWords\\cm\\v201109\\InternalApiError",
        "LongValue"                                      => "AdWords\\cm\\v201109\\LongValue",
        "ManualCPC"                                      => "AdWords\\cm\\v201109\\ManualCPC",
        "ManualCPM"                                      => "AdWords\\cm\\v201109\\ManualCPM",
        "Money"                                          => "AdWords\\cm\\v201109\\Money",
        "ComparableValue"                                => "AdWords\\cm\\v201109\\ComparableValue",
        "NetworkSetting"                                 => "AdWords\\cm\\v201109\\NetworkSetting",
        "NewEntityCreationError"                         => "AdWords\\cm\\v201109\\NewEntityCreationError",
        "NotEmptyError"                                  => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                            => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                                      => "AdWords\\cm\\v201109\\NullError",
        "OperationAccessDenied"                          => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OperatorError"                                  => "AdWords\\cm\\v201109\\OperatorError",
        "OrderBy"                                        => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                                         => "AdWords\\cm\\v201109\\Paging",
        "PercentCPA"                                     => "AdWords\\cm\\v201109\\PercentCPA",
        "PercentCPAAdGroupBids"                          => "AdWords\\cm\\v201109\\PercentCPAAdGroupBids",
        "AdGroupBids"                                    => "AdWords\\cm\\v201109\\AdGroupBids",
        "Predicate"                                      => "AdWords\\cm\\v201109\\Predicate",
        "QuotaCheckError"                                => "AdWords\\cm\\v201109\\QuotaCheckError",
        "QuotaError"                                     => "AdWords\\cm\\v201109\\QuotaError",
        "RangeError"                                     => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                              => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                                  => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RealTimeBiddingSetting"                         => "AdWords\\cm\\v201109\\RealTimeBiddingSetting",
        "RejectedError"                                  => "AdWords\\cm\\v201109\\RejectedError",
        "RequestError"                                   => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                                  => "AdWords\\cm\\v201109\\RequiredError",
        "SelectorError"                                  => "AdWords\\cm\\v201109\\SelectorError",
        "SettingError"                                   => "AdWords\\cm\\v201109\\SettingError",
        "SizeLimitError"                                 => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                             => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StatsQueryError"                                => "AdWords\\cm\\v201109\\StatsQueryError",
        "StringLengthError"                              => "AdWords\\cm\\v201109\\StringLengthError",
        "TargetError"                                    => "AdWords\\cm\\v201109\\TargetError",
        "DatabaseError"                                  => "AdWords\\cm\\v201109\\DatabaseError",
        "Selector"                                       => "AdWords\\cm\\v201109\\Selector",
        "ApiException"                                   => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                           => "AdWords\\cm\\v201109\\ApplicationException",
        "Bid"                                            => "AdWords\\cm\\v201109\\Bid",
        "Budget"                                         => "AdWords\\cm\\v201109\\Budget",
        "BudgetOptimizer"                                => "AdWords\\cm\\v201109\\BudgetOptimizer",
        "BudgetOptimizerAdGroupBids"                     => "AdWords\\cm\\v201109\\BudgetOptimizerAdGroupBids",
        "ConversionOptimizerAdGroupBids"                 => "AdWords\\cm\\v201109\\ConversionOptimizerAdGroupBids",
        "ManualCPCAdGroupBids"                           => "AdWords\\cm\\v201109\\ManualCPCAdGroupBids",
        "ManualCPMAdGroupBids"                           => "AdWords\\cm\\v201109\\ManualCPMAdGroupBids",
        "Campaign"                                       => "AdWords\\cm\\v201109\\Campaign",
        "CampaignOperation"                              => "AdWords\\cm\\v201109\\CampaignOperation",
        "Operation"                                      => "AdWords\\cm\\v201109\\Operation",
        "CampaignPage"                                   => "AdWords\\cm\\v201109\\CampaignPage",
        "Page"                                           => "AdWords\\cm\\v201109\\Page",
        "CampaignReturnValue"                            => "AdWords\\cm\\v201109\\CampaignReturnValue",
        "ListReturnValue"                                => "AdWords\\cm\\v201109\\ListReturnValue",
        "AdServingOptimizationStatus"                    => "AdWords\\cm\\v201109\\AdServingOptimizationStatus",
        "AuthenticationError.Reason"                     => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                      => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "BiddingError.Reason"                            => "AdWords\\cm\\v201109\\BiddingErrorReason",
        "BiddingTransitionError.Reason"                  => "AdWords\\cm\\v201109\\BiddingTransitionErrorReason",
        "Budget.BudgetDeliveryMethod"                    => "AdWords\\cm\\v201109\\BudgetBudgetDeliveryMethod",
        "Budget.BudgetPeriod"                            => "AdWords\\cm\\v201109\\BudgetBudgetPeriod",
        "BudgetError.Reason"                             => "AdWords\\cm\\v201109\\BudgetErrorReason",
        "CampaignError.Reason"                           => "AdWords\\cm\\v201109\\CampaignErrorReason",
        "CampaignStatus"                                 => "AdWords\\cm\\v201109\\CampaignStatus",
        "ClientTermsError.Reason"                        => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "ConversionDeduplicationMode"                    => "AdWords\\cm\\v201109\\ConversionDeduplicationMode",
        "ConversionOptimizerBidType"                     => "AdWords\\cm\\v201109\\ConversionOptimizerBidType",
        "ConversionOptimizerEligibility.RejectionReason" => "AdWords\\cm\\v201109\\ConversionOptimizerEligibilityRejectionReason",
        "DatabaseError.Reason"                           => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                               => "AdWords\\cm\\v201109\\DateErrorReason",
        "DistinctError.Reason"                           => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityNotFound.Reason"                          => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "GeoTargetTypeSetting.NegativeGeoTargetType"     => "AdWords\\cm\\v201109\\GeoTargetTypeSettingNegativeGeoTargetType",
        "GeoTargetTypeSetting.PositiveGeoTargetType"     => "AdWords\\cm\\v201109\\GeoTargetTypeSettingPositiveGeoTargetType",
        "InternalApiError.Reason"                        => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "Level"                                          => "AdWords\\cm\\v201109\\Level",
        "NewEntityCreationError.Reason"                  => "AdWords\\cm\\v201109\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                           => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                     => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                               => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"                   => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                                       => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"                           => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "Predicate.Operator"                             => "AdWords\\cm\\v201109\\PredicateOperator",
        "PricingModel"                                   => "AdWords\\cm\\v201109\\PricingModel",
        "QuotaCheckError.Reason"                         => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "QuotaError.Reason"                              => "AdWords\\cm\\v201109\\QuotaErrorReason",
        "RangeError.Reason"                              => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                       => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                           => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RejectedError.Reason"                           => "AdWords\\cm\\v201109\\RejectedErrorReason",
        "RequestError.Reason"                            => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                           => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                           => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "ServingStatus"                                  => "AdWords\\cm\\v201109\\ServingStatus",
        "SettingError.Reason"                            => "AdWords\\cm\\v201109\\SettingErrorReason",
        "SizeLimitError.Reason"                          => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                                      => "AdWords\\cm\\v201109\\SortOrder",
        "Stats.Network"                                  => "AdWords\\cm\\v201109\\StatsNetwork",
        "StatsQueryError.Reason"                         => "AdWords\\cm\\v201109\\StatsQueryErrorReason",
        "StringLengthError.Reason"                       => "AdWords\\cm\\v201109\\StringLengthErrorReason",
        "TargetError.Reason"                             => "AdWords\\cm\\v201109\\TargetErrorReason",
        "TimeUnit"                                       => "AdWords\\cm\\v201109\\TimeUnit",
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
        $options["serviceName"]      = 'CampaignService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaigns that meet the selector criteria.
     *
     * @param Selector $serviceSelector the selector specifying the {@link Campaign}s to return.
     *
     * @return CampaignPage A list of campaigns.
     * @throws ApiException if problems occurred while fetching campaign information.
     */
    public function get($serviceSelector)
    {
        $arg    = new CampaignServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

    /**
     * Adds, updates, or deletes campaigns.
     *
     * Note: {@link CampaignOperation} does not support the
     * REMOVE operator. To delete a campaign, set its
     * {@link Campaign#status status} to DELETED.
     *
     * @param CampaignOperation $operations A list of unique operations. The same campaign cannot be specified in more
     * than one operation.
     *
     * @return CampaignReturnValue The list of updated campaigns, returned in the same order as the
     * <code>operations</code> array.
     * @throws ApiException if problems occurred while updating campaign information.
     */
    public function mutate($operations)
    {
        $arg    = new CampaignServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }
}

class CampaignServiceGet
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

class CampaignServiceGetResponse
{
    /**
     * @var CampaignPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class CampaignServiceMutate
{
    /**
     * @var CampaignOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class CampaignServiceMutateResponse
{
    /**
     * @var CampaignReturnValue
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}