<?php

namespace AdWords\mcm\v201109;

use \AdWords\SoapClient;

class ServicedAccountService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                 => "AdWords\\mcm\\v201109\\ServicedAccountServiceGetResponse",
        "get"                         => "AdWords\\mcm\\v201109\\ServicedAccountServiceGet",
        "Account"                     => "AdWords\\mcm\\v201109\\Account",
        "CustomerId"                  => "AdWords\\mcm\\v201109\\CustomerId",
        "ServicedAccountError"        => "AdWords\\mcm\\v201109\\ServicedAccountError",
        "Link"                        => "AdWords\\mcm\\v201109\\Link",
        "ServicedAccountSelector"     => "AdWords\\mcm\\v201109\\ServicedAccountSelector",
        "ServicedAccountGraph"        => "AdWords\\mcm\\v201109\\ServicedAccountGraph",
        "LinkType"                    => "AdWords\\mcm\\v201109\\LinkType",
        "ServicedAccountError.Reason" => "AdWords\\mcm\\v201109\\ServicedAccountErrorReason",
        "SoapHeader"                  => "AdWords\\cm\\v201109\\SoapHeader",
        "AuthenticationError"         => "AdWords\\cm\\v201109\\AuthenticationError",
        "ApiError"                    => "AdWords\\cm\\v201109\\ApiError",
        "AuthorizationError"          => "AdWords\\cm\\v201109\\AuthorizationError",
        "ClientTermsError"            => "AdWords\\cm\\v201109\\ClientTermsError",
        "InternalApiError"            => "AdWords\\cm\\v201109\\InternalApiError",
        "NotWhitelistedError"         => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "OperatorError"               => "AdWords\\cm\\v201109\\OperatorError",
        "QuotaCheckError"             => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RateExceededError"           => "AdWords\\cm\\v201109\\RateExceededError",
        "RequestError"                => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"               => "AdWords\\cm\\v201109\\RequiredError",
        "SizeLimitError"              => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"          => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "DatabaseError"               => "AdWords\\cm\\v201109\\DatabaseError",
        "ApiException"                => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"        => "AdWords\\cm\\v201109\\ApplicationException",
        "AuthenticationError.Reason"  => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"   => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "ClientTermsError.Reason"     => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "DatabaseError.Reason"        => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "InternalApiError.Reason"     => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "NotWhitelistedError.Reason"  => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "OperatorError.Reason"        => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "QuotaCheckError.Reason"      => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RateExceededError.Reason"    => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "RequestError.Reason"         => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"        => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SizeLimitError.Reason"       => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
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
        $options["serviceName"]      = 'ServicedAccountService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/mcm/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns a representation of the managed-account relationships related to this account.
     *
     * @param $selector determines which accounts and links to retrieve
     *
     * @return ServicedAccountGraph the selected list of accounts and serviced account links between them
     * @throws ApiException if an error occurs
     */
    public function get($selector)
    {
        $arg    = new ServicedAccountServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }
}

class ServicedAccountServiceGet
{
    /**
     * @var ServicedAccountSelector
     */
    public $selector;

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}

class ServicedAccountServiceGetResponse
{
    /**
     * @var ServicedAccountGraph
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}