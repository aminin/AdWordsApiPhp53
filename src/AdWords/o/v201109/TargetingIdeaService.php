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
        "getResponse"                                     => "TargetingIdeaServiceGetResponse",
        "get"                                             => "TargetingIdeaServiceGet",
        "mutate"                                          => "TargetingIdeaServiceMutate",
        "mutateResponse"                                  => "TargetingIdeaServiceMutateResponse",
        "SoapHeader"                                      => "SoapHeader",
        "AdGroupBidLandscape"                             => "AdGroupBidLandscape",
        "BidLandscape"                                    => "BidLandscape",
        "AdGroupCriterionError"                           => "AdGroupCriterionError",
        "ApiError"                                        => "ApiError",
        "AdGroupCriterionLimitExceeded"                   => "AdGroupCriterionLimitExceeded",
        "EntityCountLimitExceeded"                        => "EntityCountLimitExceeded",
        "Address"                                         => "Address",
        "AgeRange"                                        => "AgeRange",
        "Criterion"                                       => "Criterion",
        "ApiException"                                    => "ApiException",
        "ApplicationException"                            => "ApplicationException",
        "AuthenticationError"                             => "AuthenticationError",
        "AuthorizationError"                              => "AuthorizationError",
        "DataEntry"                                       => "DataEntry",
        "BidLandscape.LandscapePoint"                     => "BidLandscapeLandscapePoint",
        "BiddingError"                                    => "BiddingError",
        "BudgetError"                                     => "BudgetError",
        "Carrier"                                         => "Carrier",
        "ClientTermsError"                                => "ClientTermsError",
        "ComparableValue"                                 => "ComparableValue",
        "CriterionBidLandscape"                           => "CriterionBidLandscape",
        "CriterionError"                                  => "CriterionError",
        "CriterionPolicyError"                            => "CriterionPolicyError",
        "PolicyViolationError"                            => "PolicyViolationError",
        "DatabaseError"                                   => "DatabaseError",
        "DateError"                                       => "DateError",
        "DistinctError"                                   => "DistinctError",
        "DoubleValue"                                     => "DoubleValue",
        "NumberValue"                                     => "NumberValue",
        "EntityNotFound"                                  => "EntityNotFound",
        "Gender"                                          => "Gender",
        "GeoPoint"                                        => "GeoPoint",
        "InternalApiError"                                => "InternalApiError",
        "Keyword"                                         => "Keyword",
        "Language"                                        => "Language",
        "Location"                                        => "Location",
        "LongValue"                                       => "LongValue",
        "Money"                                           => "Money",
        "NotEmptyError"                                   => "NotEmptyError",
        "NotWhitelistedError"                             => "NotWhitelistedError",
        "NullError"                                       => "NullError",
        "OperatingSystemVersion"                          => "OperatingSystemVersion",
        "OperationAccessDenied"                           => "OperationAccessDenied",
        "Paging"                                          => "Paging",
        "Placement"                                       => "Placement",
        "PolicyViolationError.Part"                       => "PolicyViolationErrorPart",
        "PolicyViolationKey"                              => "PolicyViolationKey",
        "Polygon"                                         => "Polygon",
        "Product"                                         => "Product",
        "ProductCondition"                                => "ProductCondition",
        "ProductConditionOperand"                         => "ProductConditionOperand",
        "Proximity"                                       => "Proximity",
        "QuotaCheckError"                                 => "QuotaCheckError",
        "RangeError"                                      => "RangeError",
        "RateExceededError"                               => "RateExceededError",
        "ReadOnlyError"                                   => "ReadOnlyError",
        "RegionCodeError"                                 => "RegionCodeError",
        "RequestError"                                    => "RequestError",
        "RequiredError"                                   => "RequiredError",
        "SizeLimitError"                                  => "SizeLimitError",
        "SoapResponseHeader"                              => "SoapResponseHeader",
        "StatsQueryError"                                 => "StatsQueryError",
        "StringLengthError"                               => "StringLengthError",
        "TargetError"                                     => "TargetError",
        "CriterionUserInterest"                           => "CriterionUserInterest",
        "CriterionUserList"                               => "CriterionUserList",
        "Vertical"                                        => "Vertical",
        "AdGroupBidLandscape.Type"                        => "AdGroupBidLandscapeType",
        "AdGroupCriterionError.Reason"                    => "AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
        "AgeRange.AgeRangeType"                           => "AgeRangeAgeRangeType",
        "AuthenticationError.Reason"                      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                       => "AuthorizationErrorReason",
        "BiddingError.Reason"                             => "BiddingErrorReason",
        "BudgetError.Reason"                              => "BudgetErrorReason",
        "ClientTermsError.Reason"                         => "ClientTermsErrorReason",
        "Criterion.Type"                                  => "CriterionType",
        "CriterionError.Reason"                           => "CriterionErrorReason",
        "DatabaseError.Reason"                            => "DatabaseErrorReason",
        "DateError.Reason"                                => "DateErrorReason",
        "DistinctError.Reason"                            => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"                 => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                           => "EntityNotFoundReason",
        "Gender.GenderType"                               => "GenderGenderType",
        "InternalApiError.Reason"                         => "InternalApiErrorReason",
        "KeywordMatchType"                                => "KeywordMatchType",
        "NotEmptyError.Reason"                            => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                      => "NotWhitelistedErrorReason",
        "NullError.Reason"                                => "NullErrorReason",
        "OperationAccessDenied.Reason"                    => "OperationAccessDeniedReason",
        "Proximity.DistanceUnits"                         => "ProximityDistanceUnits",
        "QuotaCheckError.Reason"                          => "QuotaCheckErrorReason",
        "RangeError.Reason"                               => "RangeErrorReason",
        "RateExceededError.Reason"                        => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                            => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"                          => "RegionCodeErrorReason",
        "RequestError.Reason"                             => "RequestErrorReason",
        "RequiredError.Reason"                            => "RequiredErrorReason",
        "SizeLimitError.Reason"                           => "SizeLimitErrorReason",
        "StatsQueryError.Reason"                          => "StatsQueryErrorReason",
        "StringLengthError.Reason"                        => "StringLengthErrorReason",
        "TargetError.Reason"                              => "TargetErrorReason",
        "CriterionUserList.MembershipStatus"              => "CriterionUserListMembershipStatus",
        "AdFormatSpec"                                    => "AdFormatSpec",
        "AdFormatSpecListAttribute"                       => "AdFormatSpecListAttribute",
        "Attribute"                                       => "Attribute",
        "AdShareSearchParameter"                          => "AdShareSearchParameter",
        "SearchParameter"                                 => "SearchParameter",
        "AdTypeSearchParameter"                           => "AdTypeSearchParameter",
        "AverageTargetedMonthlySearchesSearchParameter"   => "AverageTargetedMonthlySearchesSearchParameter",
        "BidLandscapeAttribute"                           => "BidLandscapeAttribute",
        "BooleanAttribute"                                => "BooleanAttribute",
        "CategoryProductsAndServicesSearchParameter"      => "CategoryProductsAndServicesSearchParameter",
        "CollectionSizeError"                             => "CollectionSizeError",
        "CompetitionSearchParameter"                      => "CompetitionSearchParameter",
        "CriterionAttribute"                              => "CriterionAttribute",
        "CurrencyCodeError"                               => "CurrencyCodeError",
        "DeviceTypeSearchParameter"                       => "DeviceTypeSearchParameter",
        "DoubleAttribute"                                 => "DoubleAttribute",
        "DoubleComparisonOperation"                       => "DoubleComparisonOperation",
        "ExcludedKeywordSearchParameter"                  => "ExcludedKeywordSearchParameter",
        "GlobalMonthlySearchesSearchParameter"            => "GlobalMonthlySearchesSearchParameter",
        "IdeaTextFilterSearchParameter"                   => "IdeaTextFilterSearchParameter",
        "IdeaTextMatchesSearchParameter"                  => "IdeaTextMatchesSearchParameter",
        "IdeaTypeAttribute"                               => "IdeaTypeAttribute",
        "InStreamAdInfo"                                  => "InStreamAdInfo",
        "InStreamAdInfoAttribute"                         => "InStreamAdInfoAttribute",
        "IncludeAdultContentSearchParameter"              => "IncludeAdultContentSearchParameter",
        "IntegerAttribute"                                => "IntegerAttribute",
        "IntegerSetAttribute"                             => "IntegerSetAttribute",
        "KeywordAttribute"                                => "KeywordAttribute",
        "KeywordCategoryIdSearchParameter"                => "KeywordCategoryIdSearchParameter",
        "KeywordMatchTypeSearchParameter"                 => "KeywordMatchTypeSearchParameter",
        "LanguageSearchParameter"                         => "LanguageSearchParameter",
        "LocationSearchParameter"                         => "LocationSearchParameter",
        "LongAttribute"                                   => "LongAttribute",
        "LongComparisonOperation"                         => "LongComparisonOperation",
        "LongRangeAttribute"                              => "LongRangeAttribute",
        "MatchesRegexError"                               => "MatchesRegexError",
        "MoneyAttribute"                                  => "MoneyAttribute",
        "MonthlySearchVolume"                             => "MonthlySearchVolume",
        "MonthlySearchVolumeAttribute"                    => "MonthlySearchVolumeAttribute",
        "OpportunityIdeaTypeAttribute"                    => "OpportunityIdeaTypeAttribute",
        "PlacementAttribute"                              => "PlacementAttribute",
        "PlacementTypeAttribute"                          => "PlacementTypeAttribute",
        "PlacementTypeSearchParameter"                    => "PlacementTypeSearchParameter",
        "Range"                                           => "Range",
        "RelatedToKeywordSearchParameter"                 => "RelatedToKeywordSearchParameter",
        "RelatedToUrlSearchParameter"                     => "RelatedToUrlSearchParameter",
        "SearchShareSearchParameter"                      => "SearchShareSearchParameter",
        "SeedAdGroupIdSearchParameter"                    => "SeedAdGroupIdSearchParameter",
        "StringAttribute"                                 => "StringAttribute",
        "TargetingIdea"                                   => "TargetingIdea",
        "TargetingIdeaError"                              => "TargetingIdeaError",
        "TargetingIdeaPage"                               => "TargetingIdeaPage",
        "TargetingIdeaSelector"                           => "TargetingIdeaSelector",
        "TrafficEstimatorError"                           => "TrafficEstimatorError",
        "Type_AttributeMapEntry"                          => "Type_AttributeMapEntry",
        "WebpageDescriptor"                               => "WebpageDescriptor",
        "WebpageDescriptorAttribute"                      => "WebpageDescriptorAttribute",
        "AttributeType"                                   => "AttributeType",
        "CollectionSizeError.Reason"                      => "CollectionSizeErrorReason",
        "CompetitionSearchParameter.Level"                => "CompetitionSearchParameterLevel",
        "CurrencyCodeError.Reason"                        => "CurrencyCodeErrorReason",
        "DeviceType"                                      => "DeviceType",
        "IdeaType"                                        => "IdeaType",
        "MatchAction"                                     => "MatchAction",
        "MatchesRegexError.Reason"                        => "MatchesRegexErrorReason",
        "OpportunityIdeaType"                             => "OpportunityIdeaType",
        "RequestType"                                     => "RequestType",
        "SiteConstants.AdFormat"                          => "SiteConstantsAdFormat",
        "SiteConstants.AdType"                            => "SiteConstantsAdType",
        "SiteConstants.PlacementType"                     => "SiteConstantsPlacementType",
        "TargetingIdeaError.Reason"                       => "TargetingIdeaErrorReason",
        "TrafficEstimatorError.Reason"                    => "TrafficEstimatorErrorReason",
        "getBulkKeywordIdeas"                             => "getBulkKeywordIdeas",
        "getBulkKeywordIdeasResponse"                     => "getBulkKeywordIdeasResponse",
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
     * @param TargetingIdeaSelector selector Query describing the types of results to return when
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
     * @param TargetingIdeaSelector selector Query describing the bulk keyword ideas to return.
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