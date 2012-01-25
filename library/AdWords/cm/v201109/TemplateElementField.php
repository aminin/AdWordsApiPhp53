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
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}