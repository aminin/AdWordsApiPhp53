<?php

namespace AdWords\mcm\v201109;

use \AdWords\SoapClient;

class CreateAccountService extends SoapClient
{
	/**
	 * Default class map for wsdl=>php
     *
	 * @var array
	 */
	protected static $classmap = array(
        "mutate"                     => "AdWords\\mcm\\v201109\\CreateAccountServiceMutate",
        "mutateResponse"             => "AdWords\\mcm\\v201109\\CreateAccountServiceMutateResponse",
        "Account"                    => "AdWords\\mcm\\v201109\\Account",
        "CreateAccountError"         => "AdWords\\mcm\\v201109\\CreateAccountError",
        "CreateAccountError.Reason"  => "AdWords\\mcm\\v201109\\CreateAccountErrorReason",
        "CreateAccountOperation"     => "AdWords\\mcm\\v201109\\CreateAccountOperation",
        "SoapHeader"                 => "AdWords\\cm\\v201109\\SoapHeader",
        "SoapResponseHeader"         => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "AuthenticationError"        => "AdWords\\cm\\v201109\\AuthenticationError",
        "ApiError"                   => "AdWords\\cm\\v201109\\ApiError",
        "AuthorizationError"         => "AdWords\\cm\\v201109\\AuthorizationError",
        "ClientTermsError"           => "AdWords\\cm\\v201109\\ClientTermsError",
        "InternalApiError"           => "AdWords\\cm\\v201109\\InternalApiError",
        "NotWhitelistedError"        => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "OperatorError"              => "AdWords\\cm\\v201109\\OperatorError",
        "QuotaCheckError"            => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RateExceededError"          => "AdWords\\cm\\v201109\\RateExceededError",
        "RequestError"               => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"              => "AdWords\\cm\\v201109\\RequiredError",
        "SizeLimitError"             => "AdWords\\cm\\v201109\\SizeLimitError",
        "StringLengthError"          => "AdWords\\cm\\v201109\\StringLengthError",
        "DatabaseError"              => "AdWords\\cm\\v201109\\DatabaseError",
        "ApiException"               => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"       => "AdWords\\cm\\v201109\\ApplicationException",
        "Operation"                  => "AdWords\\cm\\v201109\\Operation",
        "AuthenticationError.Reason" => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"  => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "ClientTermsError.Reason"    => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "DatabaseError.Reason"       => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "InternalApiError.Reason"    => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "NotWhitelistedError.Reason" => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "Operator"                   => "AdWords\\cm\\v201109\\Operator",
        "OperatorError.Reason"       => "AdWords\\cm\\v201109\\OperatorErrorReason",
        "QuotaCheckError.Reason"     => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RateExceededError.Reason"   => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "RequestError.Reason"        => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"       => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SizeLimitError.Reason"      => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "StringLengthError.Reason"   => "AdWords\\cm\\v201109\\StringLengthErrorReason"
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
		$options["classmap"] = static::$classmap;
		parent::__construct($wsdl, $options, $user, 'CreateAccountService', 'https://adwords.google.com/api/adwords/mcm/v201109');
	}

	/**
	 * Creates new AdWords accounts linked to the manager specified in the request.
     *
	 * @param operations
	 * @return the newly-created Accounts.
	 * @throws ApiException
	 */
	public function mutate($operations)
	{
		$arg = new CreateAccountServiceMutate($operations);
		$result = $this->__soapCall("mutate", array($arg));
		return $result->rval;
	}
}

class CreateAccountServiceMutate
{
    /**
     * @access public
     * @var CreateAccountOperation[]
     */
    public $operations;

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}

class CreateAccountServiceMutateResponse
{
    /**
     * @var Account[]
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}
