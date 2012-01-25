<?php

namespace AdWords\cm\v201109;



class ExemptionRequest 
{
    /**
     * Identifies the violation to request an exemption for.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\PolicyViolationKey
     */
    public $key;

    public function __construct($key = null)
    {
        $this->key = $key;
    }
}