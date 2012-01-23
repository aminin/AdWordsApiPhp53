<?php

namespace AdWords\mcm\v201109;



class Account 
{
    /**
     * &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $customerId;
    /**
     * &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $login;
    /**
     * &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $companyName;
    /**
     * &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $canManageClients;
    /**
     * &lt;span class=&quot;constraint Required&quot;&gt;This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.&lt;/span&gt;
     *                 &lt;span class=&quot;constraint StringLength&quot;&gt;The length of this string should be between 3 and 3, inclusive.&lt;/span&gt;
     * @var string
     */
    public $currencyCode;
    /**
     * &lt;span class=&quot;constraint Required&quot;&gt;This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.&lt;/span&gt;
     * @var string
     */
    public $dateTimeZone;
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