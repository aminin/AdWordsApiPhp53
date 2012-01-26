<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class PolicyViolationError extends ApiError
{
    /**
     * Unique identifier for the violation.
     * @var \AdWords\cm\v201109\PolicyViolationKey
     */
    public $key;
    /**
     * Name of policy suitable for display to users. In the user&#039;s preferred
     * language.
     * @var string
     */
    public $externalPolicyName;
    /**
     * Url with writeup about the policy.
     * @var string
     */
    public $externalPolicyUrl;
    /**
     * Localized description of the violation.
     * @var string
     */
    public $externalPolicyDescription;
    /**
     * Whether user can file an exemption request for this violation.
     * @var string
     */
    public $isExemptable;
    /**
     * Lists the parts that violate the policy.
     * @var \AdWords\cm\v201109\PolicyViolationErrorPart
     */
    public $violatingParts;
}