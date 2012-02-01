<?php

namespace AdWords\cm\v201109;



class Ad 
{
    /**
     * ID of this ad. This field is ignored when creating
     * ads using {@code AdGroupAdService}.
     * This field can be selected using the value &quot;Id&quot;.This field can be filtered on.
     * @var string
     */
    public $id;
    /**
     * Destination URL.
     * This field can be selected using the value &quot;Url&quot;.This field can be filtered on.
     * @var string
     */
    public $url;
    /**
     * Visible URL.
     * This field can be selected using the value &quot;DisplayUrl&quot;.This field can be filtered on.
     * @var string
     */
    public $displayUrl;
    /**
     * Approval status.
     * This field can be selected using the value &quot;CreativeApprovalStatus&quot;.This field can be filtered on.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\AdApprovalStatus
     */
    public $approvalStatus;
    /**
     * List of disapproval reasons.
     * This field can be selected using the value &quot;DisapprovalReasons&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $disapprovalReasons;
    /**
     * True if and only if this ad is not serving because it does not meet
     * trademark policy.
     * This field is only useful when {@link #approvalStatus approvalStatus} is an
     * approved status.
     * This field can be selected using the value &quot;TrademarkDisapproved&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $trademarkDisapproved;
    /**
     * Indicates that this instance is a subtype of Ad.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $AdType;
    private $_propertyMap = array(
        "Ad.Type" => "AdType",
    );

    public function __construct($id = null, $url = null, $displayUrl = null, $approvalStatus = null, $disapprovalReasons = null, $trademarkDisapproved = null, $AdType = null)
    {
        $this->id = $id;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->approvalStatus = $approvalStatus;
        $this->disapprovalReasons = $disapprovalReasons;
        $this->trademarkDisapproved = $trademarkDisapproved;
        $this->AdType = $AdType;
    }

    /**
     * Set property with php-incompatible name
     *
     * @param string $var   attribute name to set
     * @param mixed  $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        }
    }

    /**
     * Get property with php-incompatible name
     *
     * @param string $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else {
            return null;
        }
    }
}