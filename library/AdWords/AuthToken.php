<?php
/**
 * Client used to retrieve authentication tokens from the Client Login API.
 *
 * {@link http://code.google.com/apis/accounts/docs/AuthForInstalledApps.html}
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
 * Client used to retrieve an authentication token for the supplied credentials with the client login API.
 *
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class AuthToken
{
    private $email;
    private $password;
    private $accountType;
    private $service;
    private $source;
    private $server;
    private $captchaToken;
    private $captchaResponse;

    /**
     * Constructor for the authentication token.
     *
     * @param string $email the email of the user
     * @param string $password the password of the user
     * @param string $service the service name
     * @param string $source the source name
     * @param string $accountType the account type. Defaults to GOOGLE
     * @param string $server the server to make the request to. Defaults to https://www.google.com
     * @param string captchaToken the token return with a CAPTCHA challenge
     * @param string captchaResponse the response to a CAPTCHA challenge
     */
    function __construct(
        $email,
        $password,
        $service,
        $source,
        $accountType = 'GOOGLE',
        $server = null,
        $captchaToken = null,
        $captchaResponse = null
    )
    {
        $this->email = $email;
        $this->password = $password;
        $this->accountType = $accountType;
        $this->service = $service;
        $this->source = $source;
        $this->server = isset($server) ? $server : 'https://www.google.com';
        $this->captchaToken = $captchaToken;
        $this->captchaResponse = $captchaResponse;
    }

    /**
     * Peforms a POST to get the auth token and then parses the result.
     *
     * @return string the auth token
     * @throws AuthTokenException if an error occurs during authentication
     */
    public function getAuthToken()
    {
        $response = $this->Login();
        $fields = $this->ParseResponse($response);
        if (array_key_exists('Error', $fields)) {
            $error = $fields['Error'];
            if (array_key_exists('Info', $fields)) {
                $error .= ': ' . $fields['Info'];
            }
            $url = array_key_exists('Url', $fields) ? $fields['Url'] : null;
            $captchaToken = array_key_exists('CaptchaToken', $fields) ? $fields['CaptchaToken'] : null;
            $captchaUrl = array_key_exists('CaptchaUrl', $fields) ? $fields['CaptchaUrl'] : null;
            throw new AuthTokenException($error, $url, $captchaToken, $captchaUrl);
        } else if (!array_key_exists('Auth', $fields)) {
            throw new AuthTokenException('Unknown');
        } else {
            return $fields['Auth'];
        }
    }

    /**
     * Makes the client login request and stores the result.
     *
     * @return string the response from the ClientLogin API
     * @throws AuthTokenException if an error occurs during authentication
     * @access private
     */
    private function login()
    {
        $postUrl = $this->server . '/accounts/ClientLogin';
        $postVars = http_build_query(
            array(
                'accountType' => $this->accountType,
                'Email' => $this->email,
                'Passwd' => $this->password,
                'service' => $this->service,
                'source' => $this->source,
                'logintoken' => $this->captchaToken,
                'logincaptcha' => $this->captchaResponse
            ),
            null,
            '&'
        );

        $ch = self::CreateSession($postUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postVars);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        if (!empty($error)) {
            throw new AuthTokenException($error);
        } else if ($httpCode != 200 && $httpCode != 403) {
            throw new AuthTokenException($httpCode);
        }
        return $response;
    }

    /**
     * Parses the response into a map of field name to value.
     *
     * @param string $response the response from the ClientLogin API
     * @return array a map of field name to value
     * @access private
     */
    private function parseResponse($response)
    {
        $result = array();
        $lines = explode("\n", $response);
        foreach ($lines as $line) {
            $parts = explode('=', $line, 2);
            $key = isset($parts[0]) ? $parts[0] : null;
            $value = isset($parts[1]) ? $parts[1] : null;
            $result[$key] = $value;
        }
        return $result;
    }

    /**
     * Returns the server to make requests to.
     *
     * @return string the server to make requests to
     */
    public function getServer()
    {
        return $this->server;
    }

    public static function createSession($url)
    {
        $ch = curl_init($url);

        // Default options.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
        curl_setopt($ch, CURLOPT_USERAGENT, 'curl, gzip');

        // Proxy options.
        if (defined('HTTP_PROXY_HOST') && HTTP_PROXY_HOST != '') {
            curl_setopt($ch, CURLOPT_PROXY, HTTP_PROXY_HOST);
        }
        if (defined('HTTP_PROXY_PORT') && HTTP_PROXY_PORT != '') {
            curl_setopt($ch, CURLOPT_PROXYPORT, HTTP_PROXY_PORT);
        }
        if (
            defined('HTTP_PROXY_USER') && defined('HTTP_PROXY_PASSWORD')
            && HTTP_PROXY_USER != '' && HTTP_PROXY_PASSWORD != ''
        ) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, HTTP_PROXY_USER . ':' . HTTP_PROXY_PASSWORD);
        }

        // SSL options.
        if (defined('SSL_VERIFY_PEER') && SSL_VERIFY_PEER != '') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, SSL_VERIFY_PEER);
        } else {
            // Default to disabled, for backwards compatibility.
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        }
        if (defined('SSL_VERIFY_HOST') && SSL_VERIFY_HOST != '') {
            if (SSL_VERIFY_HOST) {
                // Verify that the host exists in the certificate and matches the
                // host in the request.
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            } else {
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            }
        } else {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        }
        if (defined('SSL_CA_PATH') && SSL_CA_PATH != '') {
            curl_setopt($ch, CURLOPT_CAPATH, SSL_CA_PATH);
        }
        if (defined('SSL_CA_FILE') && SSL_CA_FILE != '') {
            curl_setopt($ch, CURLOPT_CAINFO, SSL_CA_FILE);
        }

        return $ch;
    }
}
