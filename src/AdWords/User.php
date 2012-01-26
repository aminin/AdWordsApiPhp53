<?php
/**
 * User class for the AdWords API to create SOAP clients to the available API services.
 *
 * PHP version 5.3
 *
 * Copyright {copyright}
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    AdWords
 * @category   WebServices
 * @copyright  {copyright}
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Adam Rogal <api.arogal@gmail.com>
 * @author     Eric Koleda <eric.koleda@google.com>
 */

namespace AdWords;

/**
 * User class for the AdWords API to create SOAP clients to the available API
 * services.
 *
 * @package AdWords
 */
class User
{
    private $email;
    private $password;

    /**#@+
     * Soap header fields.
     */
    private $authToken;
    private $userAgent;
    private $developerToken;
    private $applicationToken;
    private $clientCustomerId;
    /**#@-*/

    private $authServer    = 'https://www.google.com';

    /**
     * The AdWords\User constructor.
     *
     * The AdWords\User class can be configured using supplied credentials
     *
     * @param string $email            the email of the user (required header)
     * @param string $password         the password of the user (required header)
     * @param string $developerToken   the developer token (required header)
     * @param string $applicationToken the application token (required header)
     * @param string $userAgent        the user agent name (required header)
     * @param string $clientId         the client ID to make the request against (optional header)
     * @param string $authToken        the authToken to use for requests
     */
    public function __construct(
        $email = null,
        $password = null,
        $developerToken = null,
        $applicationToken = null,
        $userAgent = null,
        $clientId = null,
        $authToken = null
    )
    {
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAuthToken($authToken);
        $this->setUserAgent($userAgent);
        $this->setClientId($clientId);
        $this->setDeveloperToken($developerToken);
        $this->setApplicationToken($applicationToken);
    }

    /**
     * Regenerates the authentication token and sets it for this user.
     *
     * @param string $server the sever to retrieve the token from
     * @return string the newly generated auth token
     */
    public function regenerateAuthToken($server = null)
    {
        if (!isset($server)) {
            $server = $this->getAuthServer();
        }

        $authTokenClient = new AuthToken(
            $this->email,
            $this->password,
            'adwords',
            $this->getUserAgent(),
            'GOOGLE',
            $server
        );

        $authToken = $authTokenClient->getAuthToken();
        $this->setAuthToken($authToken);

        return $authToken;
    }

    /**
     * Gets the authentication token.
     *
     * @return string the auth token
     */
    public function getAuthToken()
    {
        if (empty($this->authToken) && isset($this->email) && isset($this->password)) {
            $this->authToken = $this->regenerateAuthToken();
        }
        return $this->authToken;
    }

    /**
     * Sets the authentication token.
     *
     * @param string $authToken the auth token to set
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = $authToken;
    }

    /**
     * Gets the developer token for this user.
     *
     * @return string the developer token
     */
    public function getDeveloperToken()
    {
        return $this->developerToken;
    }

    /**
     * Sets the developer token for this user.
     *
     * @param string $developerToken the developer token
     */
    public function setDeveloperToken($developerToken)
    {
        $this->developerToken = $developerToken;
    }

    /**
     * Gets the application token that this user.
     *
     * @return string the application token
     */
    public function getApplicationToken()
    {
        return $this->applicationToken;
    }

    /**
     * Sets the application token for this user.
     *
     * @param string $applicationToken the application token
     */
    public function setApplicationToken($applicationToken)
    {
        $this->applicationToken = $applicationToken;
    }

    /**
     * Gets the client ID for this user.
     *
     * @return string the client ID for this user
     */
    public function getClientId()
    {
        return $this->clientCustomerId;
    }

    /**
     * Sets the client ID for this user.
     *
     * @param string $clientId the client ID for this user
     */
    public function setClientId($clientId)
    {
        $this->clientCustomerId = $clientId;
    }

    /**
     * Gets the user agent for this library.
     * @return string the user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets the user agent.
     *
     * @param string $userAgent the user agent.
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * Gets the email address of the user login.
     *
     * @return string the user login email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email address of the user login.
     *
     * @param string $email the user login email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Gets the password for this user.
     *
     * @return string the password for this user
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the password for this user.
     *
     * @param string $password the password for this user
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Validates the user and throws a validation error if there are any errors.
     *
     * @throws ValidationException if there are any validation errors
     */
    public function validateUser()
    {
        if ($this->getAuthToken() == null) {
            if (!isset($this->email)) {
                throw new ValidationException('email', null, 'email is required and cannot be null.');
            }

            if (!isset($this->password)) {
                throw new ValidationException('password', null, 'password is required and cannot be null.');
            }
            // Generate an authToken.
            $this->regenerateAuthToken();
        }

        if ($this->getUserAgent() == null) {
            throw new ValidationException('userAgent', null, 'userAgent is required and cannot be null.');
        }

        if ($this->getDeveloperToken() == null) {
            throw new ValidationException('developerToken', null, 'developerToken is required and cannot be null.');
        }
    }

    /**
     * Gets the server used for authentication.
     *
     * @return string the server used for authentication
     */
    public function getAuthServer()
    {
        return $this->authServer;
    }

    /**
     * Sets the server used for authentication.
     *
     * @param string $authServer the authentication server
     */
    public function setAuthServer($authServer)
    {
        $this->authServer = $authServer;
    }
}
