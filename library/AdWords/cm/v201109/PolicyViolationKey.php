<?php

namespace AdWords\cm\v201109;



class PolicyViolationKey 
{
    /**
     * Unique id of the violated policy.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $policyName;
    /**
     * The text that violates the policy if specified. Otherwise, refers to the
     * policy in general (e.g. when requesting to be exempt from the whole
     * policy).
     * 
     * May be null for criterion exemptions, in which case this refers to the
     * whole policy. Must be specified for ad exemptions.
     * @var string
     */
    public $violatingText;

    public function __construct($policyName = null, $violatingText = null)
    {
        $this->policyName = $policyName;
        $this->violatingText = $violatingText;
    }
}