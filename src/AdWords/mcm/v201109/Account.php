<?php

namespace AdWords\mcm\v201109;



class Account 
{
    /**
     * The 10-digit ID that uniquely identifies the AdWords account.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $customerId;
    /**
     * The email address of the account&#039;s first login user, if any.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $login;
    /**
     * The company name of the account, if any.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $companyName;
    /**
     * Whether this account can manage clients.
     * This field is read only and should not be set for following {@link Operator}s : ADD.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $canManageClients;
    /**
     * The currency in which this account operates.
     * We support a subset of the currency codes derived from the ISO 4217 standard.
     * See Currency Codes for the currently supported currencies.
     * 
     * This field can only be set during creation of the account.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * The length of this string should be between 3 and 3, inclusive.
     * @var string
     */
    public $currencyCode;
    /**
     * The local timezone ID for this Account.
     * See Time Zone Codes for the currently supported list.
     * 
     * This field can only be set during creation of the account.
     * 
     * This field is not provided by {@link ServicedAccountService}.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.
     * @var string
     */
    public $dateTimeZone;

    public function __construct($customerId = null, $login = null, $companyName = null, $canManageClients = null, $currencyCode = null, $dateTimeZone = null)
    {
        $this->customerId = $customerId;
        $this->login = $login;
        $this->companyName = $companyName;
        $this->canManageClients = $canManageClients;
        $this->currencyCode = $currencyCode;
        $this->dateTimeZone = $dateTimeZone;
    }
}