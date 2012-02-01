<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Operation;


class AdGroupAdOperation extends Operation
{
    /**
     * AdGroupAd to operate on.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\AdGroupAd
     */
    public $operand;
    /**
     * Exemption requests for any policy violations in this Ad.  This field is
     * only used for ADD operations
     * @var \AdWords\cm\v201109\ExemptionRequest
     */
    public $exemptionRequests;
}