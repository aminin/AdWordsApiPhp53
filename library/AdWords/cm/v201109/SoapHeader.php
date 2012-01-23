<?php

namespace AdWords\cm\v201109;



class SoapHeader 
{
    /**
     * Authentication token from Google ClientLogin API. Developers need to authenticate themselves
     *                 with that API before they can send a request to AdWords API. This header identifies either the
     *                 MCC manager acting on behalf of their client, or the advertiser managing their own account.
     * @var string
     */
    public $authToken;
    /**
     * Optional header: the customer id of the client of the MCC manager. Applicable only
     *                 if an MCC manager, as identified by authToken, is acting on behalf of their client.
     * @var string
     */
    public $clientCustomerId;
    /**
     * Developer token to identify that the person making the call has enough
     *                 quota.
     * @var string
     */
    public $developerToken;
    /**
     * UserAgent is used to track distribution of API client programs and
     *                 application usage. The client is responsible for putting in a meaningful
     *                 value for tracking purposes. To be clear this is not the same as an HTTP
     *                 user agent.
     * @var string
     */
    public $userAgent;
    /**
     * Used to validate the request without executing it.
     * @var string
     */
    public $validateOnly;
    /**
     * If true, API will try to commit as many error free operations as possible and
     *                 report the other operations&#039; errors.
     *                 
     *                 &lt;p&gt;Ignored for non-mutate calls.
     * @var string
     */
    public $partialFailure;
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