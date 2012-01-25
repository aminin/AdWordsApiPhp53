<?php
/**
 * This example updates the default bid of an ad group. To get ad groups, run
 * GetAdGroups.php.
 *
 * Tags: AdGroupService.mutate
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
require_once __DIR__ . '/../../../library/AdWords/Autoloader.php';
\AdWords\Autoloader::register();

$adGroupId = null; // insert ad group id here

if (!$adGroupId) {
    if (!isset($argv[1]) || !is_numeric($argv[1])) { // or pass ad group id as the first argument
        die("No campaign id given\n");
    }
    $adGroupId = $argv[1];
}

/**
 * Runs the example.
 *
 * @param \AdWords\User $user      the user to run the example with
 * @param string        $adGroupId the id of the ad group to update
 */
function UpdateAdGroupExample(\AdWords\User $user, $adGroupId)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    // Get the service, which loads the required classes.
    /** @var \AdWords\cm\v201109\AdGroupService $adGroupService */
    $adGroupService = $soapClientFactory->generateSoapClient('AdGroup');

    // Create ad group using an existing ID.
    $adGroup     = new \AdWords\cm\v201109\AdGroup();
    $adGroup->id = $adGroupId;

    // Update the bid.
    $adGroup->bids = new \AdWords\cm\v201109\ManualCPCAdGroupBids;
    $adGroup->bids->keywordMaxCpc = new \AdWords\cm\v201109\Bid;
    $adGroup->bids->keywordMaxCpc->amount = new \AdWords\cm\v201109\Money;
    $adGroup->bids->keywordMaxCpc->amount->microAmount = 0.75 * 1e6;

    // Create operation.
    $operation           = new \AdWords\cm\v201109\AdGroupOperation;
    $operation->operand  = $adGroup;
    $operation->operator = 'SET';

    $operations = array($operation);

    // Make the mutate request.
    $result = $adGroupService->mutate($operations);

    // Display result.
    $adGroup = $result->value[0];
    printf(
        "Ad group with id '%s' has updated default bid '$%s'.\n",
        $adGroup->id,
        $adGroup->bids->keywordMaxCpc->amount->microAmount / 1e6
    );

}

try {
    $iniFilename = __DIR__ . '/../../example.ini';
    if (file_exists($iniFilename)) {
        $ini          = parse_ini_file($iniFilename, true);
        $userSettings = $ini['user'];
    } else {
        die("Ini file not found\n");
    }

    $user = new \AdWords\User();
    $user->setEmail($userSettings['email']);
    $user->setPassword($userSettings['password']);
    $user->setAuthToken($userSettings['authToken']);
    $user->setClientId($userSettings['clientId']);
    $user->setDeveloperToken($userSettings['developerToken']);

    printf("AuthToken: %s\n", $user->getAuthToken());
    printf("ClientId: %s\n", $user->getClientId());

    // Run the example.
    updateAdGroupExample($user, $adGroupId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
