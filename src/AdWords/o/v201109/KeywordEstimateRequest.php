<?php

namespace AdWords\o\v201109;

use AdWords\o\v201109\EstimateRequest;


class KeywordEstimateRequest extends EstimateRequest
{
    /**
     * The {@link Keyword} to estimate. The keyword text is required regardless
     * of whether the keyword ID is included. The keyword ID is optional and has
     * the following characteristics:
     * 
     * When omitted, the ID indicates a new keyword to be estimated.
     * When present with a campaign and ad group also specified, the ID should
     * be for an existing keyword in the ad group. This can improve the estimates
     * since historical performance is known.
     * When present without a campaign and ad group specified, the ID is
     * ignored.
     * 
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\Keyword
     */
    public $keyword;
    /**
     * The max CPC bid for this keyword.
     * 
     * In general, the {@code maxCpc} of a {@link KeywordEstimateRequest} is
     * optional, since there is usually another {@code maxCpc} that can be used,
     * such as the {@code maxCpc} on an existing keyword, an existing or
     * overriding {@code maxCpc} of containing {@link AdGroupEstimateRequest}.
     * However, if there is no backup value of {@code maxCpc} anywhere along the
     * line, you must provide a value for {@code maxCpc} in
     * {@link KeywordEstimateRequest}. This would happen, for example, if the
     * {@link KeywordEstimateRequest} is for a new keyword.
     * @var \AdWords\cm\v201109\Money
     */
    public $maxCpc;
    /**
     * Whether the keyword is negative or not. The default value is false.
     * If negative, no current ad group ads will appear for searches containing
     * this keyword.
     * 
     * The estimate for negative keywords should reflect no traffic and zero CPC,
     * but including a negative keyword will affect the other estimates in the
     * request.
     * @var string
     */
    public $isNegative;
}