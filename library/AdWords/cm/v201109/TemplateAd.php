<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\Ad;


class TemplateAd extends Ad
{
    /**
     * ID of the template to use.
     * This field can be selected using the value &quot;TemplateId&quot;.
     * @var string
     */
    public $templateId;
    /**
     * Group ID of all template ads, which should be created together.
     * Template ads in the same union reference the same data but have different
     * dimensions. Single ads do not have a union ID. If a template ad specifies
     * an ad union with only one ad, no union will be created.
     * This field can be selected using the value &quot;TemplateAdUnionId&quot;.
     * @var \AdWords\cm\v201109\AdUnionId
     */
    public $adUnionId;
    /**
     * List of elements (each containing a set of fields) for the template
     * referenced by {@code templateId}. See the
     * Template
     * Ads appendix for the elements and fields required for each template.
     * @var \AdWords\cm\v201109\TemplateElement
     */
    public $templateElements;
    /**
     * The dimensions for this ad.
     * @var \AdWords\cm\v201109\Dimensions
     */
    public $dimensions;
    /**
     * Name of this ad.
     * This field can be selected using the value &quot;TemplateAdName&quot;.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $name;
    /**
     * Duration of this ad (if it contains playable media).
     * This field can be selected using the value &quot;TemplateAdDuration&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $duration;
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