<?php

namespace AdWords\cm\v201109;



class TemplateElementField 
{
    /**
     * The name of this field.
     * This field can be selected using the value &quot;TemplateElementFieldName&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $name;
    /**
     * The type of this field.
     * This field can be selected using the value &quot;TemplateElementFieldType&quot;.
     * This field is required and should not be {@code null}.
     * @var \AdWords\cm\v201109\TemplateElementFieldType
     */
    public $type;
    /**
     * Text value for text field types. Null if not text field.
     * The field is a text field if type is ADDRESS, ENUM, TEXT, URL,
     * or VISIBLE_URL.
     * This field can be selected using the value &quot;TemplateElementFieldText&quot;.
     * @var string
     */
    public $fieldText;
    /**
     * Media value for non-text field types. Null if a text field. This
     * fields must be specified if fieldText is null.
     * @var \AdWords\cm\v201109\Media
     */
    public $fieldMedia;

    public function __construct($name = null, $type = null, $fieldText = null, $fieldMedia = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->fieldText = $fieldText;
        $this->fieldMedia = $fieldMedia;
    }
}