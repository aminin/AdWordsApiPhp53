<?php

namespace AdWords\cm\v201109;



class TemplateElement 
{
    /**
     * Unique name for this element.
     * This field can be selected using the value &quot;UniqueName&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $uniqueName;
    /**
     * List of fields to use for this template element.
     * These must be the same for all template ads in the same template ad union.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\TemplateElementField
     */
    public $fields;

    public function __construct($uniqueName = null, $fields = null)
    {
        $this->uniqueName = $uniqueName;
        $this->fields = $fields;
    }
}