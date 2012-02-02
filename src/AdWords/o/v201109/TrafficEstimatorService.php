<?php

namespace AdWords\o\v201109;

use \AdWords\SoapClient;

class TrafficEstimatorService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    protected static $classmap = array(
        "getResponse"                        => "AdWords\\o\\v201109\\TrafficEstimatorServiceGetResponse",
        "get"                                => "AdWords\\o\\v201109\\TrafficEstimatorServiceGet",
        'ApiError'                           => 'AdWords\\cm\\v201109\\ApiError',
        'ApiException'                       => 'AdWords\\cm\\v201109\\ApiException',
        'ApplicationException'               => 'AdWords\\cm\\v201109\\ApplicationException',
        'AuthenticationError'                => 'AdWords\\cm\\v201109\\AuthenticationError',
        'AuthorizationError'                 => 'AdWords\\cm\\v201109\\AuthorizationError',
        'ClientTermsError'                   => 'AdWords\\cm\\v201109\\ClientTermsError',
        'ComparableValue'                    => 'AdWords\\cm\\v201109\\ComparableValue',
        'Criterion'                          => 'AdWords\\cm\\v201109\\Criterion',
        'DatabaseError'                      => 'AdWords\\cm\\v201109\\DatabaseError',
        'DateError'                          => 'AdWords\\cm\\v201109\\DateError',
        'DistinctError'                      => 'AdWords\\cm\\v201109\\DistinctError',
        'DoubleValue'                        => 'AdWords\\cm\\v201109\\DoubleValue',
        'EntityAccessDenied'                 => 'AdWords\\cm\\v201109\\EntityAccessDenied',
        'EntityNotFound'                     => 'AdWords\\cm\\v201109\\EntityNotFound',
        'IdError'                            => 'AdWords\\cm\\v201109\\IdError',
        'InternalApiError'                   => 'AdWords\\cm\\v201109\\InternalApiError',
        'Keyword'                            => 'AdWords\\cm\\v201109\\Keyword',
        'Language'                           => 'AdWords\\cm\\v201109\\Language',
        'Location'                           => 'AdWords\\cm\\v201109\\Location',
        'LongValue'                          => 'AdWords\\cm\\v201109\\LongValue',
        'Money'                              => 'AdWords\\cm\\v201109\\Money',
        'NetworkSetting'                     => 'AdWords\\cm\\v201109\\NetworkSetting',
        'NotEmptyError'                      => 'AdWords\\cm\\v201109\\NotEmptyError',
        'NotWhitelistedError'                => 'AdWords\\cm\\v201109\\NotWhitelistedError',
        'NullError'                          => 'AdWords\\cm\\v201109\\NullError',
        'NumberValue'                        => 'AdWords\\cm\\v201109\\NumberValue',
        'OperationAccessDenied'              => 'AdWords\\cm\\v201109\\OperationAccessDenied',
        'OperatorError'                      => 'AdWords\\cm\\v201109\\OperatorError',
        'Placement'                          => 'AdWords\\cm\\v201109\\Placement',
        'Product'                            => 'AdWords\\cm\\v201109\\Product',
        'ProductCondition'                   => 'AdWords\\cm\\v201109\\ProductCondition',
        'ProductConditionOperand'            => 'AdWords\\cm\\v201109\\ProductConditionOperand',
        'QuotaCheckError'                    => 'AdWords\\cm\\v201109\\QuotaCheckError',
        'RangeError'                         => 'AdWords\\cm\\v201109\\RangeError',
        'RateExceededError'                  => 'AdWords\\cm\\v201109\\RateExceededError',
        'ReadOnlyError'                      => 'AdWords\\cm\\v201109\\ReadOnlyError',
        'RegionCodeError'                    => 'AdWords\\cm\\v201109\\RegionCodeError',
        'RejectedError'                      => 'AdWords\\cm\\v201109\\RejectedError',
        'RequestError'                       => 'AdWords\\cm\\v201109\\RequestError',
        'RequiredError'                      => 'AdWords\\cm\\v201109\\RequiredError',
        'SizeLimitError'                     => 'AdWords\\cm\\v201109\\SizeLimitError',
        'SoapHeader'                         => 'AdWords\\cm\\v201109\\SoapHeader',
        'SoapResponseHeader'                 => 'AdWords\\cm\\v201109\\SoapResponseHeader',
        'StringLengthError'                  => 'AdWords\\cm\\v201109\\StringLengthError',
        'TargetError'                        => 'AdWords\\cm\\v201109\\TargetError',
        'CriterionUserInterest'              => 'AdWords\\cm\\v201109\\CriterionUserInterest',
        'CriterionUserList'                  => 'AdWords\\cm\\v201109\\CriterionUserList',
        'Vertical'                           => 'AdWords\\cm\\v201109\\Vertical',
        'AuthenticationError.Reason'         => 'AdWords\\cm\\v201109\\AuthenticationErrorReason',
        'AuthorizationError.Reason'          => 'AdWords\\cm\\v201109\\AuthorizationErrorReason',
        'ClientTermsError.Reason'            => 'AdWords\\cm\\v201109\\ClientTermsErrorReason',
        'Criterion.Type'                     => 'AdWords\\cm\\v201109\\CriterionType',
        'DatabaseError.Reason'               => 'AdWords\\cm\\v201109\\DatabaseErrorReason',
        'DateError.Reason'                   => 'AdWords\\cm\\v201109\\DateErrorReason',
        'DistinctError.Reason'               => 'AdWords\\cm\\v201109\\DistinctErrorReason',
        'EntityAccessDenied.Reason'          => 'AdWords\\cm\\v201109\\EntityAccessDeniedReason',
        'EntityNotFound.Reason'              => 'AdWords\\cm\\v201109\\EntityNotFoundReason',
        'IdError.Reason'                     => 'AdWords\\cm\\v201109\\IdErrorReason',
        'InternalApiError.Reason'            => 'AdWords\\cm\\v201109\\InternalApiErrorReason',
        'KeywordMatchType'                   => 'AdWords\\cm\\v201109\\KeywordMatchType',
        'NotEmptyError.Reason'               => 'AdWords\\cm\\v201109\\NotEmptyErrorReason',
        'NotWhitelistedError.Reason'         => 'AdWords\\cm\\v201109\\NotWhitelistedErrorReason',
        'NullError.Reason'                   => 'AdWords\\cm\\v201109\\NullErrorReason',
        'OperationAccessDenied.Reason'       => 'AdWords\\cm\\v201109\\OperationAccessDeniedReason',
        'OperatorError.Reason'               => 'AdWords\\cm\\v201109\\OperatorErrorReason',
        'QuotaCheckError.Reason'             => 'AdWords\\cm\\v201109\\QuotaCheckErrorReason',
        'RangeError.Reason'                  => 'AdWords\\cm\\v201109\\RangeErrorReason',
        'RateExceededError.Reason'           => 'AdWords\\cm\\v201109\\RateExceededErrorReason',
        'ReadOnlyError.Reason'               => 'AdWords\\cm\\v201109\\ReadOnlyErrorReason',
        'RegionCodeError.Reason'             => 'AdWords\\cm\\v201109\\RegionCodeErrorReason',
        'RejectedError.Reason'               => 'AdWords\\cm\\v201109\\RejectedErrorReason',
        'RequestError.Reason'                => 'AdWords\\cm\\v201109\\RequestErrorReason',
        'RequiredError.Reason'               => 'AdWords\\cm\\v201109\\RequiredErrorReason',
        'SizeLimitError.Reason'              => 'AdWords\\cm\\v201109\\SizeLimitErrorReason',
        'StringLengthError.Reason'           => 'AdWords\\cm\\v201109\\StringLengthErrorReason',
        'TargetError.Reason'                 => 'AdWords\\cm\\v201109\\TargetErrorReason',
        'CriterionUserList.MembershipStatus' => 'AdWords\\cm\\v201109\\CriterionUserListMembershipStatus',
        'AdGroupEstimate'                    => 'AdWords\\o\\v201109\\AdGroupEstimate',
        'AdGroupEstimateRequest'             => 'AdWords\\o\\v201109\\AdGroupEstimateRequest',
        'CampaignEstimate'                   => 'AdWords\\o\\v201109\\CampaignEstimate',
        'CampaignEstimateRequest'            => 'AdWords\\o\\v201109\\CampaignEstimateRequest',
        'CollectionSizeError'                => 'AdWords\\o\\v201109\\CollectionSizeError',
        'CurrencyCodeError'                  => 'AdWords\\o\\v201109\\CurrencyCodeError',
        'Estimate'                           => 'AdWords\\o\\v201109\\Estimate',
        'EstimateRequest'                    => 'AdWords\\o\\v201109\\EstimateRequest',
        'KeywordEstimate'                    => 'AdWords\\o\\v201109\\KeywordEstimate',
        'KeywordEstimateRequest'             => 'AdWords\\o\\v201109\\KeywordEstimateRequest',
        'MatchesRegexError'                  => 'AdWords\\o\\v201109\\MatchesRegexError',
        'StatsEstimate'                      => 'AdWords\\o\\v201109\\StatsEstimate',
        'TrafficEstimatorError'              => 'AdWords\\o\\v201109\\TrafficEstimatorError',
        'TrafficEstimatorResult'             => 'AdWords\\o\\v201109\\TrafficEstimatorResult',
        'TrafficEstimatorSelector'           => 'AdWords\\o\\v201109\\TrafficEstimatorSelector',
        'CollectionSizeError.Reason'         => 'AdWords\\o\\v201109\\CollectionSizeErrorReason',
        'CurrencyCodeError.Reason'           => 'AdWords\\o\\v201109\\CurrencyCodeErrorReason',
        'MatchesRegexError.Reason'           => 'AdWords\\o\\v201109\\MatchesRegexErrorReason',
        'TrafficEstimatorError.Reason'       => 'AdWords\\o\\v201109\\TrafficEstimatorErrorReason',
    );

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options)
    {
        $options["classmap"]         = self::$classmap;
        $options["serviceName"]      = 'TrafficEstimatorService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/o/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns traffic estimates for specified criteria.
     *
     * @param TrafficEstimatorSelector $selector Campaigns, ad groups and
	 * keywords for which traffic should be estimated.
     *
     * @return Traffic estimation results.
     * @throws ApiException if problems occurred while retrieving estimates
     */
    public function get($selector)
    {
        $arg    = new TrafficEstimatorServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}

class TrafficEstimatorServiceGet
{
    /**
     * @var TrafficEstimatorSelector
     */
    public $selector;

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}

class TrafficEstimatorServiceGetResponse
{
    /**
     * @var TrafficEstimatorResult
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}
