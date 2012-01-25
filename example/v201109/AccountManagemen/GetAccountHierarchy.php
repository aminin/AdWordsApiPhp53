<?php
/**
 * This example gets the account hierarchy under the current account. Note: this
 * example must be run using the credentials of an MCC account.
 *
 * Tags: ServicedAccountService.get
 * Restriction: adwords-only
 *
 * PHP version 5
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
 * @package    AdsAdWords
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
require_once __DIR__ . '/../../../library/AdWords/Autoloader.php';
\AdWords\Autoloader::register();

/**
 * Runs the example.
 *
 * @param \AdWords\User $user the user to run the example with
 */
function getAccountHierarchyExample(\AdWords\User $user)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');

    // Get the service, which loads the required classes.
    /** @var \AdWords\mcm\v201109\ServicedAccountService $servicedAccountService */
    $servicedAccountService = $soapClientFactory->generateSoapClient('ServicedAccount');

    // Create selector.
    $selector = new \AdWords\mcm\v201109\ServicedAccountSelector();
    // To get the links paging must be disabled.
    $selector->enablePaging = false;

    // Make the get request.
    $graph = $servicedAccountService->get($selector);

    // Display serviced account graph.
    if (isset($graph->accounts)) {
        // Create map from customerId to parent and child links.
        $childLinks  = array();
        $parentLinks = array();
        if (isset($graph->links)) {
            foreach ($graph->links as $link) {
                $childLinks[$link->managerId->id][] = $link;
                $parentLinks[$link->clientId->id][] = $link;
            }
        }
        // Create map from customerID to account, and find root account.
        $accounts    = array();
        $rootAccount = null;
        foreach ($graph->accounts as $account) {
            $accounts[(string) $account->customerId] = $account;
            if (!array_key_exists((string) $account->customerId, $parentLinks)) {
                $rootAccount = $account;
            }
        }
        // The root account may not be returned in the sandbox.
        if (!isset($rootAccount)) {
            $rootAccount             = new \AdWords\mcm\v201109\Account();
            $rootAccount->customerId = 0;
            $rootAccount->login      = $user->GetEmail();
        }
        // Display account tree.
        print "(Customer Id, Account Name/Login, Link Status)\n";
        displayAccountTree($rootAccount, NULL, $accounts, $childLinks, 0);
    } else {
        print "No serviced accounts were found.\n";
    }
}

/**
 * Displays an account tree, starting at the account and link provided, and
 * recursing to all child accounts.
 *
 * @param \AdWords\mcm\v201109\Account $account  the account to display
 * @param \AdWords\mcm\v201109\Link    $link     the link used to reach this account
 * @param array                        $accounts a map from customerId to account
 * @param array                        $links    a map from customerId to child links
 * @param int                          $depth    the depth of the current account in the tree
 */
function displayAccountTree($account, $link, $accounts, $links, $depth)
{
    print str_repeat('-', $depth * 2);
    printf(
        "%s, %s, %s\n",
        $account->customerId,
        !empty($link->descriptiveName) ? $link->descriptiveName : $account->login,
        isset($link) ? $link->typeOfLink : 'N/A'
    );
    if (array_key_exists((string) $account->customerId, $links)) {
        foreach ($links[(string) $account->customerId] as $childLink) {
            if ($childAccount = $accounts[(string) $childLink->clientId->id])
                displayAccountTree($childAccount, $childLink, $accounts, $links, $depth + 1);
        }
    }
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

try {
    $iniFilename = __DIR__ . '/../../example.ini';
    if (file_exists($iniFilename)) {
       $ini = parse_ini_file($iniFilename, true);
       $userSettings = $ini['user'];
    } else {
       die("Ini file not found\n");
    }

    $user = new \AdWords\User();
    $user->setEmail($userSettings['email']);
    $user->setPassword($userSettings['password']);
    $user->setAuthToken($userSettings['authToken']);
    $user->setDeveloperToken($userSettings['developerToken']);
    printf("AuthToken: %s\n", $user->getAuthToken());

    // Run the example.
    getAccountHierarchyExample($user);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
