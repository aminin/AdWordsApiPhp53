<?php

namespace AdWords\cm\v201109;

class ConversionTrackerServiceGet
{
    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

    public function __construct($serviceSelector = NULL)
    {
        $this->serviceSelector = $serviceSelector;
    }
}

class ConversionTrackerServiceGetResponse
{
    /**
     * @var ConversionTrackerPage
     */
    public $rval;

    public function __construct($rval = NULL)
    {
        $this->rval = $rval;
    }
}

class ConversionTrackerServiceMutate
{
    /**
     * @var ConversionTrackerOperation[]
     */
    public $operations;

    public function __construct($operations = NULL)
    {
        $this->operations = $operations;
    }
}

class ConversionTrackerServiceMutateResponse
{
    /**
     * @var ConversionTrackerReturnValue
     */
    public $rval;

    public function __construct($rval = NULL)
    {
        $this->rval = $rval;
    }
}


/**
 * An error that can occur during calls to the ConversionTypeService.
 */
class ConversionTrackingError extends ApiError
{
    /**
     * @var ConversionTrackingErrorReason
     */
    public $reason;

    public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL)
    {
        $this->reason = $reason;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}

/**
 * Operations for conversion tracker.
 */
class ConversionTrackerOperation extends Operation
{
    /**
     * @var ConversionTracker
     */
    public $operand;


    public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL)
    {
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}

/**
 * ConversionTrackerService
 */
class ConversionTrackerService extends \AdWords\SoapClient
{
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                             => "AdWords\\cm\\v201109\\ConversionTrackerServiceGetResponse",
        "get"                                     => "AdWords\\cm\\v201109\\ConversionTrackerServiceGet",
        "mutate"                                  => "AdWords\\cm\\v201109\\ConversionTrackerServiceMutate",
        "mutateResponse"                          => "AdWords\\cm\\v201109\\ConversionTrackerServiceMutateResponse",
        "DateTime"                                => "AdWords\\cm\\v201109\\AdWordsDateTime",
        "SoapHeader"                              => "AdWords\\cm\\v201109\\SoapHeader",
        "AdWordsConversionTracker"                => "AdWords\\cm\\v201109\\AdWordsConversionTracker",
        "ConversionTracker"                       => "AdWords\\cm\\v201109\\ConversionTracker",
        "AuthenticationError"                     => "AdWords\\cm\\v201109\\AuthenticationError",
        "ApiError"                                => "AdWords\\cm\\v201109\\ApiError",
        "AuthorizationError"                      => "AdWords\\cm\\v201109\\AuthorizationError",
        "ClientTermsError"                        => "AdWords\\cm\\v201109\\ClientTermsError",
        "ConversionTrackingError"                 => "AdWords\\cm\\v201109\\ConversionTrackingError",
        "DateError"                               => "AdWords\\cm\\v201109\\DateError",
        "DateRange"                               => "AdWords\\cm\\v201109\\DateRange",
        "DistinctError"                           => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                             => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                             => "AdWords\\cm\\v201109\\NumberValue",
        "InternalApiError"                        => "AdWords\\cm\\v201109\\InternalApiError",
        "LongValue"                               => "AdWords\\cm\\v201109\\LongValue",
        "Money"                                   => "AdWords\\cm\\v201109\\Money",
        "ComparableValue"                         => "AdWords\\cm\\v201109\\ComparableValue",
        "NotEmptyError"                           => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                     => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "OperatorError"                           => "AdWords\\cm\\v201109\\OperatorError",
        "OrderBy"                                 => "AdWords\\cm\\v201109\\OrderBy",
        "Paging"                                  => "AdWords\\cm\\v201109\\Paging",
        "Predicate"                               => "AdWords\\cm\\v201109\\Predicate",
        "QuotaCheckError"                         => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RangeError"                              => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                       => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                           => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RequestError"                            => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                           => "AdWords\\cm\\v201109\\RequiredError",
        "SelectorError"                           => "AdWords\\cm\\v201109\\SelectorError",
        "SizeLimitError"                          => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                      => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "ConversionTrackerStats"                  => "AdWords\\cm\\v201109\\ConversionTrackerStats",
        "ConversionTrackerOperation"              => "AdWords\\cm\\v201109\\ConversionTrackerOperation",
        "Operation"                               => "AdWords\\cm\\v201109\\Operation",
        "ConversionTrackerReturnValue"            => "AdWords\\cm\\v201109\\ConversionTrackerReturnValue",
        "ListReturnValue"                         => "AdWords\\cm\\v201109\\ListReturnValue",
        "DatabaseError"                           => "AdWords\\cm\\v201109\\DatabaseError",
        "Selector"                                => "AdWords\\cm\\v201109\\Selector",
        "ApiException"                            => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                    => "AdWords\\cm\\v201109\\ApplicationException",
        "ConversionTrackerPage"                   => "AdWords\\cm\\v201109\\ConversionTrackerPage",
        "NoStatsPage"                             => "AdWords\\cm\\v201109\\NoStatsPage",
        "Page"                                    => "AdWords\\cm\\v201109\\Page",
        "AdWordsConversionTracker.HttpProtocol"   => "AdWords\\cm\\v201109\\AdWordsConversionTrackerHttpProtocol",
        "AdWordsConversionTracker.MarkupLanguage" => "AdWords\\cm\\v201109\\AdWordsConversionTrackerMarkupLanguage",
        "AdWordsConversionTracker.TextFormat"     => "AdWords\\cm\\v201109\\AdWordsConversionTrackerTextFormat",
        "AuthenticationError.Reason"              => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"               => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "ClientTermsError.Reason"                 => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "ConversionTracker.Category"              => "AdWords\\cm\\v201109\\ConversionTrackerCategory",
        "ConversionTracker.Status"                => "AdWords\\cm\\v201109\\ConversionTrackerStatus",
        "ConversionTrackingError.Reason"          => "AdWords\\cm\\v201109\\ConversionTrackingErrorReason",
        "DatabaseError.Reason"                    => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                        => "AdWords\\cm\\v201109\\DateErrorReason",
        "DistinctError.Reason"                    => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "InternalApiError.Reason"                 => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "NotEmptyError.Reason"                    => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"              => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "Operator"                                => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"                    => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "Predicate.Operator"                      => "AdWords\\cm\\v201109\\PredicateOperator",
        "QuotaCheckError.Reason"                  => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RangeError.Reason"                       => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                    => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RequestError.Reason"                     => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                    => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SelectorError.Reason"                    => "AdWords\\cm\\v201109\\SelectorErrorReason",
        "SizeLimitError.Reason"                   => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "SortOrder"                               => "AdWords\\cm\\v201109\\SortOrder",
    );

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201109/ConversionTrackerService";

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options)
    {
        $options["classmap"] = self::$classmap;
        $options["serviceName"]      = 'ConversionOptimizerService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/cm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of the conversion trackers that match the selector. The
     * actual objects contained in the page's list of entries will be specific
     * subclasses of the abstract {@ConversionTracker} class.
     *
     * @param $serviceSelector \AdWords\cm\v201109\Selector
     * @return ConversionTrackerPage
     */
    public function get(Selector $serviceSelector)
    {
        $arg = new ConversionTrackerServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     *
     * Applies the list of mutate operations such as adding or updating conversion trackers.
     *
     * @param ConversionTrackerOperation[] $operations
     * @return ConversionTracker[]|AdWordsConversionTracker
     */
    public function mutate($operations)
    {
        $arg = new ConversionTrackerServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }


}

