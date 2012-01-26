<?php

namespace AdWords\cm\v201109;

use \AdWords\SoapClient;

class CampaignTargetService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                  => "AdWords\\cm\\v201109\\CampaignTargetServiceGetResponse",
        "get"                          => "AdWords\\cm\\v201109\\CampaignTargetServiceGet",
        "mutate"                       => "AdWords\\cm\\v201109\\CampaignTargetServiceMutate",
        "mutateResponse"               => "AdWords\\cm\\v201109\\CampaignTargetServiceMutateResponse",
        "DateTime"                     => "AdWords\\cm\\v201109\\AdWordsDateTime",
        "SoapHeader"                   => "AdWords\\cm\\v201109\\SoapHeader",
        "AdScheduleTarget"             => "AdWords\\cm\\v201109\\AdScheduleTarget",
        "Target"                       => "AdWords\\cm\\v201109\\Target",
        "AuthenticationError"          => "AdWords\\cm\\v201109\\AuthenticationError",
        "ApiError"                     => "AdWords\\cm\\v201109\\ApiError",
        "AuthorizationError"           => "AdWords\\cm\\v201109\\AuthorizationError",
        "BiddingError"                 => "AdWords\\cm\\v201109\\BiddingError",
        "CampaignError"                => "AdWords\\cm\\v201109\\CampaignError",
        "ClientTermsError"             => "AdWords\\cm\\v201109\\ClientTermsError",
        "DistinctError"                => "AdWords\\cm\\v201109\\DistinctError",
        "EntityNotFound"               => "AdWords\\cm\\v201109\\EntityNotFound",
        "InternalApiError"             => "AdWords\\cm\\v201109\\InternalApiError",
        "NotEmptyError"                => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"          => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                    => "AdWords\\cm\\v201109\\NullError",
        "OperationAccessDenied"        => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "OperatorError"                => "AdWords\\cm\\v201109\\OperatorError",
        "QuotaCheckError"              => "AdWords\\cm\\v201109\\QuotaCheckError",
        "QuotaError"                   => "AdWords\\cm\\v201109\\QuotaError",
        "RangeError"                   => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"            => "AdWords\\cm\\v201109\\RateExceededError",
        "RegionCodeError"              => "AdWords\\cm\\v201109\\RegionCodeError",
        "RejectedError"                => "AdWords\\cm\\v201109\\RejectedError",
        "RequestError"                 => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                => "AdWords\\cm\\v201109\\RequiredError",
        "SizeLimitError"               => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"           => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StringLengthError"            => "AdWords\\cm\\v201109\\StringLengthError",
        "TargetError"                  => "AdWords\\cm\\v201109\\TargetError",
        "CampaignTargetSelector"       => "AdWords\\cm\\v201109\\CampaignTargetSelector",
        "DatabaseError"                => "AdWords\\cm\\v201109\\DatabaseError",
        "AdScheduleTargetList"         => "AdWords\\cm\\v201109\\AdScheduleTargetList",
        "TargetList"                   => "AdWords\\cm\\v201109\\TargetList",
        "ApiException"                 => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"         => "AdWords\\cm\\v201109\\ApplicationException",
        "CampaignTargetOperation"      => "AdWords\\cm\\v201109\\CampaignTargetOperation",
        "Operation"                    => "AdWords\\cm\\v201109\\Operation",
        "CampaignTargetPage"           => "AdWords\\cm\\v201109\\CampaignTargetPage",
        "Page"                         => "AdWords\\cm\\v201109\\Page",
        "CampaignTargetReturnValue"    => "AdWords\\cm\\v201109\\CampaignTargetReturnValue",
        "ListReturnValue"              => "AdWords\\cm\\v201109\\ListReturnValue",
        "AuthenticationError.Reason"   => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"    => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "BiddingError.Reason"          => "AdWords\\cm\\v201109\\BiddingErrorReason",
        "CampaignError.Reason"         => "AdWords\\cm\\v201109\\CampaignErrorReason",
        "ClientTermsError.Reason"      => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "DatabaseError.Reason"         => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DayOfWeek"                    => "AdWords\\cm\\v201109\\DayOfWeek",
        "DistinctError.Reason"         => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityNotFound.Reason"        => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "InternalApiError.Reason"      => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "MinuteOfHour"                 => "AdWords\\cm\\v201109\\MinuteOfHour",
        "NotEmptyError.Reason"         => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"   => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"             => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason" => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Operator"                     => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"         => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "QuotaCheckError.Reason"       => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "QuotaError.Reason"            => "AdWords\\cm\\v201109\\QuotaErrorReason",
        "RangeError.Reason"            => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"     => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "RegionCodeError.Reason"       => "AdWords\\cm\\v201109\\RegionCodeErrorReason",
        "RejectedError.Reason"         => "AdWords\\cm\\v201109\\RejectedErrorReason",
        "RequestError.Reason"          => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"         => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SizeLimitError.Reason"        => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "StringLengthError.Reason"     => "AdWords\\cm\\v201109\\StringLengthErrorReason",
        "TargetError.Reason"           => "AdWords\\cm\\v201109\\TargetErrorReason",
    );

    /**
     * Constructor using wsdl location and options array
     *
     * @param string        $wsdl    WSDL location for this service
     * @param array         $options Options for the SoapClient
     * @param \AdWords\User $user
     */
    public function __construct($wsdl, $options, \AdWords\User $user)
    {
        $options["classmap"] = CampaignTargetService::$classmap;
        parent::__construct($wsdl, $options, $user, 'CampaignTargetService', 'https://adwords.google.com/api/adwords/cm/v201109');
    }

    /**
     * Returns the targets for each of the campaigns identified in the campaign target selector.
     *
     * @param Selector selector a list of campaigns' ids and optional filter of target types.
     *
     * @return CampaignTargetPage page of lists of the requested campaign targets.
     * @throws ApiException if problems occurred while fetching campaign targeting information.
     */
    public function get($selector)
    {
        $arg    = new CampaignTargetServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

    /**
     * Mutates (sets) targets for specified campaign identified in the campaign operations.
     *
     * <p class="note"><b>Note:</b> When a campaign is created, its targeting
     * options are also created. To add or remove targets, call {@code mutate} with
     * the {@code SET} operator to update the target lists accordingly. The
     * {@code ADD} and {@code REMOVE} operators are not supported.</p>
     *
     * @param CampaignTargetOperation[] operations list of operations associating targets with campaign ids.
     *
     * @return CampaignTargetReturnValue the updated campaign targets, not necessarily in the same order in which they came in.
     * @throws ApiException if problems occurred while adding campaign targeting information.
     */
    public function mutate($operations)
    {
        $arg    = new CampaignTargetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }
}

class CampaignTargetServiceGet
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

class CampaignTargetServiceGetResponse
{
    /**
     * @var CampaignTargetPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class CampaignTargetServiceMutate
{
    /**
     * @var CampaignTargetOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class CampaignTargetServiceMutateResponse
{
    /**
     * @var CampaignTargetReturnValue
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}