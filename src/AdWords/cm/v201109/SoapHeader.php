<?php

namespace AdWords\cm\v201109;



class SoapHeader 
{
    /**
     * Authentication token from Google ClientLogin API. Developers need to authenticate themselves
     * with that API before they can send a request to AdWords API. This header identifies either the
     * MCC manager acting on behalf of their client, or the advertiser managing their own account.
     * @var string
     */
    public $authToken;
    /**
     * Optional header: the customer id of the client of the MCC manager. Applicable only
     * if an MCC manager, as identified by authToken, is acting on behalf of their client.
     * @var string
     */
    public $clientCustomerId;
    /**
     * Developer token to identify that the person making the call has enough
     * quota.
     * @var string
     */
    public $developerToken;
    /**
     * UserAgent is used to track distribution of API client programs and
     * application usage. The client is responsible for putting in a meaningful
     * value for tracking purposes. To be clear this is not the same as an HTTP
     * user agent.
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
     * report the other operations&#039; errors.
     * 
     * Ignored for non-mutate calls.
     * @var string
     */
    public $partialFailure;

    public function __construct($authToken = null, $clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
    {
        $this->authToken = $authToken;
        $this->clientCustomerId = $clientCustomerId;
        $this->developerToken = $developerToken;
        $this->userAgent = $userAgent;
        $this->validateOnly = $validateOnly;
        $this->partialFailure = $partialFailure;
    }
}