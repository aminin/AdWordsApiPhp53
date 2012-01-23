<?php

namespace AdWords\mcm\v201109;

use AdWords\cm\v201109\Operation;


class CreateAccountOperation extends Operation
{
    /**
     * @var \AdWords\mcm\v201109\Account
     */
    public $operand;
    /**
     * &lt;span class=&quot;constraint Required&quot;&gt;This field is required and should not be {@code null}.&lt;/span&gt;
     *                     &lt;span class=&quot;constraint StringLength&quot;&gt;The length of this string should be between 1 and 255, inclusive, (trimmed).&lt;/span&gt;
     * @var string
     */
    public $descriptiveName;
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