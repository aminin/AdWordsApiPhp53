<?php

namespace AdWords\mcm\v201109;



class Account 
{
    /**
     * The 10-digit ID that uniquely identifies the AdWords account.
     *                 &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $customerId;
    /**
     * The email address of the account&#039;s first login user, if any.
     *                 &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $login;
    /**
     * The company name of the account, if any.
     *                 &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $companyName;
    /**
     * Whether this account can manage clients.
     *                 &lt;span class=&quot;constraint ReadOnly&quot;&gt;This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.&lt;/span&gt;
     * @var string
     */
    public $canManageClients;
    /**
     * The currency in which this account operates.
     *                 We support a subset of the currency codes derived from the ISO 4217 standard.
     *                 See &lt;a href=&quot;http://code.google.com/apis/adwords/docs/developer/adwords_api_currency.html&quot;
     *                 &gt;Currency Codes&lt;/a&gt; for the currently supported currencies.
     *                 &lt;p&gt;
     *                 This field can only be set during creation of the account.
     *                 &lt;span class=&quot;constraint Required&quot;&gt;This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.&lt;/span&gt;
     *                 &lt;span class=&quot;constraint StringLength&quot;&gt;The length of this string should be between 3 and 3, inclusive.&lt;/span&gt;
     * @var string
     */
    public $currencyCode;
    /**
     * The local timezone ID for this Account.
     *                 See &lt;a href=&quot;http://code.google.com/apis/adwords/docs/developer/adwords_api_timezones.html&quot;
     *                 &gt;Time Zone Codes&lt;/a&gt; for the currently supported list.
     *                 &lt;p&gt;
     *                 This field can only be set during creation of the account.
     *                 &lt;p&gt;
     *                 This field is not provided by {@link ServicedAccountService}.
     *                 &lt;span class=&quot;constraint Required&quot;&gt;This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.&lt;/span&gt;
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