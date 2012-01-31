<?php

namespace AdWords\o\v201109;



class TargetingIdea 
{
    /**
     * Map of
     * {@link com.google.ads.api.services.targetingideas.external.AttributeType}
     * to {@link Attribute}. Stores all data retrieved for each key {@code
     * AttributeType}.
     * This field is required and should not be {@code null}.
     * @var \AdWords\o\v201109\Type_AttributeMapEntry
     */
    public $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }
}