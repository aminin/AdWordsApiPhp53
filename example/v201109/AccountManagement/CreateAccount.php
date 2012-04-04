<?php
/**
 * This example creates a new account under an MCC account. Note: this example
 * must be run using the credentials of an MCC account, and by default the new
 * account will only be accessible via the parent MCC account.
 *
 * Tags: CreateAccountService.mutate
 *
 * PHP 5.3
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
 * @subpackage example
 * @category   WebServices
 * @copyright  {copyright}
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Eric Koleda <eric.koleda@google.com>
 */

error_reporting(E_STRICT | E_ALL);

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

// Register autoloader for the library.
require_once __DIR__ . '/../../../src/AdWords/Autoloader.php';
\AdWords\Autoloader::register();

try {
    $iniFilename = __DIR__ . '/../../example.ini';
    if (file_exists($iniFilename)) {
        $ini = parse_ini_file($iniFilename, true);
        $userSettings = $ini['user'];
    } else {
        die("Ini file not found\n");
    }

    // Get AdWordsUser from credentials in "../auth.ini"
    // relative to the AdWordsUser.php file's directory.
    $user = new \AdWords\User();
    $user->setEmail($userSettings['email']);
    $user->setPassword($userSettings['password']);
    $user->setAuthToken($userSettings['authToken']);
    printf("AuthToken: %s\n", $user->getAuthToken());

    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);

    // WARNING: CreateAccountService doesn't work on https://adwords-sandbox.google.com
    //$soapClientFactory->setServer('https://adwords-sandbox.google.com');

    /** @var \AdWords\mcm\v201109\CreateAccountService $createAccountService */
    $createAccountService = $soapClientFactory->generateSoapClient('CreateAccount');

    // Create account.
    $account = new \AdWords\mcm\v201109\Account;
    $account->currencyCode = 'EUR';
    $account->dateTimeZone = 'Europe/London';

    // Create operation.
    $operation = new \AdWords\mcm\v201109\CreateAccountOperation;
    $operation->operand = $account;
    $operation->descriptiveName = 'Test CreateAccountService #' . uniqid();
    $operation->operator = 'ADD';

    $operations = array($operation);

    // Make the mutate request.
    $result = $createAccountService->mutate($operations);

    // Display result.
    $account = $result[0];
    printf("Account with customer ID '%s' was created.\n", $account->customerId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
    print_r($e);
}
