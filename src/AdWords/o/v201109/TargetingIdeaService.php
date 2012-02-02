<?php

namespace AdWords\o\v201109;

use \AdWords\SoapClient;

class TargetingIdeaService extends SoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                     => "AdWords\\o\\v201109\\TargetingIdeaServiceGetResponse",
        "get"                                             => "AdWords\\o\\v201109\\TargetingIdeaServiceGet",
        "SoapHeader"                                      => "AdWords\\cm\\v201109\\SoapHeader",
        "AdGroupBidLandscape"                             => "AdWords\\cm\\v201109\\AdGroupBidLandscape",
        "BidLandscape"                                    => "AdWords\\cm\\v201109\\BidLandscape",
        "AdGroupCriterionError"                           => "AdWords\\cm\\v201109\\AdGroupCriterionError",
        "ApiError"                                        => "AdWords\\cm\\v201109\\ApiError",
        "AdGroupCriterionLimitExceeded"                   => "AdWords\\cm\\v201109\\AdGroupCriterionLimitExceeded",
        "EntityCountLimitExceeded"                        => "AdWords\\cm\\v201109\\EntityCountLimitExceeded",
        "Address"                                         => "AdWords\\cm\\v201109\\Address",
        "AgeRange"                                        => "AdWords\\cm\\v201109\\AgeRange",
        "Criterion"                                       => "AdWords\\cm\\v201109\\Criterion",
        "ApiException"                                    => "AdWords\\cm\\v201109\\ApiException",
        "ApplicationException"                            => "AdWords\\cm\\v201109\\ApplicationException",
        "AuthenticationError"                             => "AdWords\\cm\\v201109\\AuthenticationError",
        "AuthorizationError"                              => "AdWords\\cm\\v201109\\AuthorizationError",
        "DataEntry"                                       => "AdWords\\cm\\v201109\\DataEntry",
        "BidLandscape.LandscapePoint"                     => "AdWords\\cm\\v201109\\BidLandscapeLandscapePoint",
        "BiddingError"                                    => "AdWords\\cm\\v201109\\BiddingError",
        "BudgetError"                                     => "AdWords\\cm\\v201109\\BudgetError",
        "Carrier"                                         => "AdWords\\cm\\v201109\\Carrier",
        "ClientTermsError"                                => "AdWords\\cm\\v201109\\ClientTermsError",
        "ComparableValue"                                 => "AdWords\\cm\\v201109\\ComparableValue",
        "CriterionBidLandscape"                           => "AdWords\\cm\\v201109\\CriterionBidLandscape",
        "CriterionError"                                  => "AdWords\\cm\\v201109\\CriterionError",
        "CriterionPolicyError"                            => "AdWords\\cm\\v201109\\CriterionPolicyError",
        "PolicyViolationError"                            => "AdWords\\cm\\v201109\\PolicyViolationError",
        "DatabaseError"                                   => "AdWords\\cm\\v201109\\DatabaseError",
        "DateError"                                       => "AdWords\\cm\\v201109\\DateError",
        "DistinctError"                                   => "AdWords\\cm\\v201109\\DistinctError",
        "DoubleValue"                                     => "AdWords\\cm\\v201109\\DoubleValue",
        "NumberValue"                                     => "AdWords\\cm\\v201109\\NumberValue",
        "EntityNotFound"                                  => "AdWords\\cm\\v201109\\EntityNotFound",
        "Gender"                                          => "AdWords\\cm\\v201109\\Gender",
        "GeoPoint"                                        => "AdWords\\cm\\v201109\\GeoPoint",
        "InternalApiError"                                => "AdWords\\cm\\v201109\\InternalApiError",
        "Keyword"                                         => "AdWords\\cm\\v201109\\Keyword",
        "Language"                                        => "AdWords\\cm\\v201109\\Language",
        "Location"                                        => "AdWords\\cm\\v201109\\Location",
        "LongValue"                                       => "AdWords\\cm\\v201109\\LongValue",
        "Money"                                           => "AdWords\\cm\\v201109\\Money",
        "NotEmptyError"                                   => "AdWords\\cm\\v201109\\NotEmptyError",
        "NotWhitelistedError"                             => "AdWords\\cm\\v201109\\NotWhitelistedError",
        "NullError"                                       => "AdWords\\cm\\v201109\\NullError",
        "OperatingSystemVersion"                          => "AdWords\\cm\\v201109\\OperatingSystemVersion",
        "OperationAccessDenied"                           => "AdWords\\cm\\v201109\\OperationAccessDenied",
        "Paging"                                          => "AdWords\\cm\\v201109\\Paging",
        "Placement"                                       => "AdWords\\cm\\v201109\\Placement",
        "PolicyViolationError.Part"                       => "AdWords\\cm\\v201109\\PolicyViolationErrorPart",
        "PolicyViolationKey"                              => "AdWords\\cm\\v201109\\PolicyViolationKey",
        "Polygon"                                         => "AdWords\\cm\\v201109\\Polygon",
        "Product"                                         => "AdWords\\cm\\v201109\\Product",
        "ProductCondition"                                => "AdWords\\cm\\v201109\\ProductCondition",
        "ProductConditionOperand"                         => "AdWords\\cm\\v201109\\ProductConditionOperand",
        "Proximity"                                       => "AdWords\\cm\\v201109\\Proximity",
        "QuotaCheckError"                                 => "AdWords\\cm\\v201109\\QuotaCheckError",
        "RangeError"                                      => "AdWords\\cm\\v201109\\RangeError",
        "RateExceededError"                               => "AdWords\\cm\\v201109\\RateExceededError",
        "ReadOnlyError"                                   => "AdWords\\cm\\v201109\\ReadOnlyError",
        "RegionCodeError"                                 => "AdWords\\cm\\v201109\\RegionCodeError",
        "RequestError"                                    => "AdWords\\cm\\v201109\\RequestError",
        "RequiredError"                                   => "AdWords\\cm\\v201109\\RequiredError",
        "SizeLimitError"                                  => "AdWords\\cm\\v201109\\SizeLimitError",
        "SoapResponseHeader"                              => "AdWords\\cm\\v201109\\SoapResponseHeader",
        "StatsQueryError"                                 => "AdWords\\cm\\v201109\\StatsQueryError",
        "StringLengthError"                               => "AdWords\\cm\\v201109\\StringLengthError",
        "TargetError"                                     => "AdWords\\cm\\v201109\\TargetError",
        "CriterionUserInterest"                           => "AdWords\\cm\\v201109\\CriterionUserInterest",
        "CriterionUserList"                               => "AdWords\\cm\\v201109\\CriterionUserList",
        "Vertical"                                        => "AdWords\\cm\\v201109\\Vertical",
        "AdGroupBidLandscape.Type"                        => "AdWords\\cm\\v201109\\AdGroupBidLandscapeType",
        "AdGroupCriterionError.Reason"                    => "AdWords\\cm\\v201109\\AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdWords\\cm\\v201109\\AdGroupCriterionLimitExceededCriteriaLimitType",
        "AgeRange.AgeRangeType"                           => "AdWords\\cm\\v201109\\AgeRangeAgeRangeType",
        "AuthenticationError.Reason"                      => "AdWords\\cm\\v201109\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                       => "AdWords\\cm\\v201109\\AuthorizationErrorReason",
        "BiddingError.Reason"                             => "AdWords\\cm\\v201109\\BiddingErrorReason",
        "BudgetError.Reason"                              => "AdWords\\cm\\v201109\\BudgetErrorReason",
        "ClientTermsError.Reason"                         => "AdWords\\cm\\v201109\\ClientTermsErrorReason",
        "Criterion.Type"                                  => "AdWords\\cm\\v201109\\CriterionType",
        "CriterionError.Reason"                           => "AdWords\\cm\\v201109\\CriterionErrorReason",
        "DatabaseError.Reason"                            => "AdWords\\cm\\v201109\\DatabaseErrorReason",
        "DateError.Reason"                                => "AdWords\\cm\\v201109\\DateErrorReason",
        "DistinctError.Reason"                            => "AdWords\\cm\\v201109\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"                 => "AdWords\\cm\\v201109\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                           => "AdWords\\cm\\v201109\\EntityNotFoundReason",
        "Gender.GenderType"                               => "AdWords\\cm\\v201109\\GenderGenderType",
        "InternalApiError.Reason"                         => "AdWords\\cm\\v201109\\InternalApiErrorReason",
        "KeywordMatchType"                                => "AdWords\\cm\\v201109\\KeywordMatchType",
        "NotEmptyError.Reason"                            => "AdWords\\cm\\v201109\\NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                      => "AdWords\\cm\\v201109\\NotWhitelistedErrorReason",
        "NullError.Reason"                                => "AdWords\\cm\\v201109\\NullErrorReason",
        "OperationAccessDenied.Reason"                    => "AdWords\\cm\\v201109\\OperationAccessDeniedReason",
        "Proximity.DistanceUnits"                         => "AdWords\\cm\\v201109\\ProximityDistanceUnits",
        "QuotaCheckError.Reason"                          => "AdWords\\cm\\v201109\\QuotaCheckErrorReason",
        "RangeError.Reason"                               => "AdWords\\cm\\v201109\\RangeErrorReason",
        "RateExceededError.Reason"                        => "AdWords\\cm\\v201109\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                            => "AdWords\\cm\\v201109\\ReadOnlyErrorReason",
        "RegionCodeError.Reason"                          => "AdWords\\cm\\v201109\\RegionCodeErrorReason",
        "RequestError.Reason"                             => "AdWords\\cm\\v201109\\RequestErrorReason",
        "RequiredError.Reason"                            => "AdWords\\cm\\v201109\\RequiredErrorReason",
        "SizeLimitError.Reason"                           => "AdWords\\cm\\v201109\\SizeLimitErrorReason",
        "StatsQueryError.Reason"                          => "AdWords\\cm\\v201109\\StatsQueryErrorReason",
        "StringLengthError.Reason"                        => "AdWords\\cm\\v201109\\StringLengthErrorReason",
        "TargetError.Reason"                              => "AdWords\\cm\\v201109\\TargetErrorReason",
        "CriterionUserList.MembershipStatus"              => "AdWords\\cm\\v201109\\CriterionUserListMembershipStatus",
        "AdFormatSpec"                                    => "AdWords\\o\\v201109\\AdFormatSpec",
        "AdFormatSpecListAttribute"                       => "AdWords\\o\\v201109\\AdFormatSpecListAttribute",
        "Attribute"                                       => "AdWords\\o\\v201109\\Attribute",
        "AdShareSearchParameter"                          => "AdWords\\o\\v201109\\AdShareSearchParameter",
        "SearchParameter"                                 => "AdWords\\o\\v201109\\SearchParameter",
        "AdTypeSearchParameter"                           => "AdWords\\o\\v201109\\AdTypeSearchParameter",
        "AverageTargetedMonthlySearchesSearchParameter"   => "AdWords\\o\\v201109\\AverageTargetedMonthlySearchesSearchParameter",
        "BidLandscapeAttribute"                           => "AdWords\\o\\v201109\\BidLandscapeAttribute",
        "BooleanAttribute"                                => "AdWords\\o\\v201109\\BooleanAttribute",
        "CategoryProductsAndServicesSearchParameter"      => "AdWords\\o\\v201109\\CategoryProductsAndServicesSearchParameter",
        "CollectionSizeError"                             => "AdWords\\o\\v201109\\CollectionSizeError",
        "CompetitionSearchParameter"                      => "AdWords\\o\\v201109\\CompetitionSearchParameter",
        "CriterionAttribute"                              => "AdWords\\o\\v201109\\CriterionAttribute",
        "CurrencyCodeError"                               => "AdWords\\o\\v201109\\CurrencyCodeError",
        "DeviceTypeSearchParameter"                       => "AdWords\\o\\v201109\\DeviceTypeSearchParameter",
        "DoubleAttribute"                                 => "AdWords\\o\\v201109\\DoubleAttribute",
        "DoubleComparisonOperation"                       => "AdWords\\o\\v201109\\DoubleComparisonOperation",
        "ExcludedKeywordSearchParameter"                  => "AdWords\\o\\v201109\\ExcludedKeywordSearchParameter",
        "GlobalMonthlySearchesSearchParameter"            => "AdWords\\o\\v201109\\GlobalMonthlySearchesSearchParameter",
        "IdeaTextFilterSearchParameter"                   => "AdWords\\o\\v201109\\IdeaTextFilterSearchParameter",
        "IdeaTextMatchesSearchParameter"                  => "AdWords\\o\\v201109\\IdeaTextMatchesSearchParameter",
        "IdeaTypeAttribute"                               => "AdWords\\o\\v201109\\IdeaTypeAttribute",
        "InStreamAdInfo"                                  => "AdWords\\o\\v201109\\InStreamAdInfo",
        "InStreamAdInfoAttribute"                         => "AdWords\\o\\v201109\\InStreamAdInfoAttribute",
        "IncludeAdultContentSearchParameter"              => "AdWords\\o\\v201109\\IncludeAdultContentSearchParameter",
        "IntegerAttribute"                                => "AdWords\\o\\v201109\\IntegerAttribute",
        "IntegerSetAttribute"                             => "AdWords\\o\\v201109\\IntegerSetAttribute",
        "KeywordAttribute"                                => "AdWords\\o\\v201109\\KeywordAttribute",
        "KeywordCategoryIdSearchParameter"                => "AdWords\\o\\v201109\\KeywordCategoryIdSearchParameter",
        "KeywordMatchTypeSearchParameter"                 => "AdWords\\o\\v201109\\KeywordMatchTypeSearchParameter",
        "LanguageSearchParameter"                         => "AdWords\\o\\v201109\\LanguageSearchParameter",
        "LocationSearchParameter"                         => "AdWords\\o\\v201109\\LocationSearchParameter",
        "LongAttribute"                                   => "AdWords\\o\\v201109\\LongAttribute",
        "LongComparisonOperation"                         => "AdWords\\o\\v201109\\LongComparisonOperation",
        "LongRangeAttribute"                              => "AdWords\\o\\v201109\\LongRangeAttribute",
        "MatchesRegexError"                               => "AdWords\\o\\v201109\\MatchesRegexError",
        "MoneyAttribute"                                  => "AdWords\\o\\v201109\\MoneyAttribute",
        "MonthlySearchVolume"                             => "AdWords\\o\\v201109\\MonthlySearchVolume",
        "MonthlySearchVolumeAttribute"                    => "AdWords\\o\\v201109\\MonthlySearchVolumeAttribute",
        "OpportunityIdeaTypeAttribute"                    => "AdWords\\o\\v201109\\OpportunityIdeaTypeAttribute",
        "PlacementAttribute"                              => "AdWords\\o\\v201109\\PlacementAttribute",
        "PlacementTypeAttribute"                          => "AdWords\\o\\v201109\\PlacementTypeAttribute",
        "PlacementTypeSearchParameter"                    => "AdWords\\o\\v201109\\PlacementTypeSearchParameter",
        "Range"                                           => "AdWords\\o\\v201109\\Range",
        "RelatedToKeywordSearchParameter"                 => "AdWords\\o\\v201109\\RelatedToKeywordSearchParameter",
        "RelatedToUrlSearchParameter"                     => "AdWords\\o\\v201109\\RelatedToUrlSearchParameter",
        "SearchShareSearchParameter"                      => "AdWords\\o\\v201109\\SearchShareSearchParameter",
        "SeedAdGroupIdSearchParameter"                    => "AdWords\\o\\v201109\\SeedAdGroupIdSearchParameter",
        "StringAttribute"                                 => "AdWords\\o\\v201109\\StringAttribute",
        "TargetingIdea"                                   => "AdWords\\o\\v201109\\TargetingIdea",
        "TargetingIdeaError"                              => "AdWords\\o\\v201109\\TargetingIdeaError",
        "TargetingIdeaPage"                               => "AdWords\\o\\v201109\\TargetingIdeaPage",
        "TargetingIdeaSelector"                           => "AdWords\\o\\v201109\\TargetingIdeaSelector",
        "TrafficEstimatorError"                           => "AdWords\\o\\v201109\\TrafficEstimatorError",
        "Type_AttributeMapEntry"                          => "AdWords\\o\\v201109\\Type_AttributeMapEntry",
        "WebpageDescriptor"                               => "AdWords\\o\\v201109\\WebpageDescriptor",
        "WebpageDescriptorAttribute"                      => "AdWords\\o\\v201109\\WebpageDescriptorAttribute",
        "AttributeType"                                   => "AdWords\\o\\v201109\\AttributeType",
        "CollectionSizeError.Reason"                      => "AdWords\\o\\v201109\\CollectionSizeErrorReason",
        "CompetitionSearchParameter.Level"                => "AdWords\\o\\v201109\\CompetitionSearchParameterLevel",
        "CurrencyCodeError.Reason"                        => "AdWords\\o\\v201109\\CurrencyCodeErrorReason",
        "DeviceType"                                      => "AdWords\\o\\v201109\\DeviceType",
        "IdeaType"                                        => "AdWords\\o\\v201109\\IdeaType",
        "MatchesRegexError.Reason"                        => "AdWords\\o\\v201109\\MatchesRegexErrorReason",
        "OpportunityIdeaType"                             => "AdWords\\o\\v201109\\OpportunityIdeaType",
        "RequestType"                                     => "AdWords\\o\\v201109\\RequestType",
        "SiteConstants.AdFormat"                          => "AdWords\\o\\v201109\\SiteConstantsAdFormat",
        "SiteConstants.AdType"                            => "AdWords\\o\\v201109\\SiteConstantsAdType",
        "SiteConstants.PlacementType"                     => "AdWords\\o\\v201109\\SiteConstantsPlacementType",
        "TargetingIdeaError.Reason"                       => "AdWords\\o\\v201109\\TargetingIdeaErrorReason",
        "TrafficEstimatorError.Reason"                    => "AdWords\\o\\v201109\\TrafficEstimatorErrorReason",
        "getBulkKeywordIdeas"                             => "AdWords\\o\\v201109\\getBulkKeywordIdeas",
        "getBulkKeywordIdeasResponse"                     => "AdWords\\o\\v201109\\getBulkKeywordIdeasResponse",
    );

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl, $options)
    {
        $options["classmap"]         = self::$classmap;
        $options["serviceName"]      = 'AdGroupService';
        $options["serviceNamespace"] = 'https://adwords.google.com/api/adwords/o/v201109';
        parent::__construct($wsdl, $options);
    }

    /**
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     *
     * <p>Only a relatively small total number of results will be available through this method.
     * Much larger result sets may be available using
     * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
     * selector options.
     *
     * @param TargetingIdeaSelector $selector Query describing the types of results to return when
     *                 finding matches (similar keyword ideas/placement ideas).
     *
     * @return TargetingIdeaPage A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector)
    {
        $arg    = new TargetingIdeaServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.  This method is specialized for returning
     * bulk keyword ideas, and thus the selector must be set for
     * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
     * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
     * A limited, fixed set of attributes will be returned.
     *
     * <p>A single-valued
     * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
     * must be supplied.  Single-valued
     * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
     * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
     * both optional.  Other search parameters compatible with a keyword query may also be
     * supplied.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 500 or
     * less. Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     *
     * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
     * but allows less control over the query. For fine-tuned queries that do not need large numbers
     * of results, prefer {@link #get(TargetingIdeaSelector)}.
     *
     * @param TargetingIdeaSelector $selector Query describing the bulk keyword ideas to return.
     *
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function getBulkKeywordIdeas($selector)
    {
        $arg    = new getBulkKeywordIdeas($selector);
        $result = $this->__soapCall("getBulkKeywordIdeas", array($arg));
        return $result->rval;
    }
}

class TargetingIdeaServiceGet
{
    /**
     * @var TargetingIdeaSelector
     */
    public $selector;

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}

class TargetingIdeaServiceGetResponse
{
    /**
     * @var TargetingIdeaPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}

class getBulkKeywordIdeas
{
    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}

class getBulkKeywordIdeasResponse
{
    /**
     * @var TargetingIdeaPage
     */
    public $rval;

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}