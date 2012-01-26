<?php

namespace AdWords\cm\v201109;



class AuthenticationErrorReason
{
    /**
     * Authentication of the request failed.
     */
    const CHOICE_AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
    /**
     * Client Customer Id is required if CustomerIdMode is set to CLIENT_EXTERNAL_CUSTOMER_ID.
     */
    const CHOICE_CLIENT_CUSTOMER_ID_IS_REQUIRED = 'CLIENT_CUSTOMER_ID_IS_REQUIRED';
    /**
     * Client Email is required if CustomerIdMode is set to CLIENT_EXTERNAL_EMAIL_FIELD.
     */
    const CHOICE_CLIENT_EMAIL_REQUIRED = 'CLIENT_EMAIL_REQUIRED';
    /**
     * Client customer Id is not a number.
     */
    const CHOICE_CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
    /**
     * Client customer Id is not a number.
     */
    const CHOICE_CLIENT_EMAIL_INVALID = 'CLIENT_EMAIL_INVALID';
    /**
     * Client email is not a valid customer email.
     */
    const CHOICE_CLIENT_EMAIL_FAILED_TO_AUTHENTICATE = 'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE';
    /**
     * No customer found for the customer id provided in the header.
     */
    const CHOICE_CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
    /**
     * Client&#039;s Google Account is deleted.
     */
    const CHOICE_GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
    /**
     * Google account login token in the cookie is invalid.
     */
    const CHOICE_GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
    /**
     * problem occurred during Google account authentication.
     */
    const CHOICE_FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT = 'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT';
    /**
     * The user in the google account login token does not match the UserId in the cookie.
     */
    const CHOICE_GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
    /**
     * Login cookie is required for authentication.
     */
    const CHOICE_LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
    /**
     * User in the cookie is not a valid Ads user.
     */
    const CHOICE_NOT_ADS_USER = 'NOT_ADS_USER';
    /**
     * Oauth token in the header is not valid.
     */
    const CHOICE_OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
    /**
     * Oauth token in the header has expired.
     */
    const CHOICE_OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
    /**
     * Oauth token in the header has been disabled.
     */
    const CHOICE_OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
    /**
     * Oauth token in the header has been revoked.
     */
    const CHOICE_OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
    /**
     * Oauth token HTTP header is malformed.
     */
    const CHOICE_OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
    /**
     * Login cookie is not valid.
     */
    const CHOICE_LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
    /**
     * Failed to decrypt the login cookie.
     */
    const CHOICE_FAILED_TO_RETRIEVE_LOGIN_COOKIE = 'FAILED_TO_RETRIEVE_LOGIN_COOKIE';
    /**
     * User Id in the header is not a valid id.
     */
    const CHOICE_USER_ID_INVALID = 'USER_ID_INVALID';

    private $_validValues = array(
        'AUTHENTICATION_FAILED',
        'CLIENT_CUSTOMER_ID_IS_REQUIRED',
        'CLIENT_EMAIL_REQUIRED',
        'CLIENT_CUSTOMER_ID_INVALID',
        'CLIENT_EMAIL_INVALID',
        'CLIENT_EMAIL_FAILED_TO_AUTHENTICATE',
        'CUSTOMER_NOT_FOUND',
        'GOOGLE_ACCOUNT_DELETED',
        'GOOGLE_ACCOUNT_COOKIE_INVALID',
        'FAILED_TO_AUTHENTICATE_GOOGLE_ACCOUNT',
        'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH',
        'LOGIN_COOKIE_REQUIRED',
        'NOT_ADS_USER',
        'OAUTH_TOKEN_INVALID',
        'OAUTH_TOKEN_EXPIRED',
        'OAUTH_TOKEN_DISABLED',
        'OAUTH_TOKEN_REVOKED',
        'OAUTH_TOKEN_HEADER_INVALID',
        'LOGIN_COOKIE_INVALID',
        'FAILED_TO_RETRIEVE_LOGIN_COOKIE',
        'USER_ID_INVALID',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}