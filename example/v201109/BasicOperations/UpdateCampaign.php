<?php
/**
 * This example updates the budget delivery method of a campaign. To get
 * campaigns, run GetCampaigns.php.
 *
 * Tags: CampaignService.mutate
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
 * @author     Adam Rogal <api.arogal@gmail.com>
 * @author     Eric Koleda <eric.koleda@google.com>
 */

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
    return;
}

// Register autoloader for the library.
require_once __DIR__ . '/../../../src/AdWords/Autoloader.php';
\AdWords\Autoloader::register();

$campaignId = null; // insert campaign id here

if (!$campaignId) {
    if (!isset($argv[1]) || !is_numeric($argv[1])) { // or pass campaign id as the first argument
        die("No campaign id given\n");
    }
    $campaignId = $argv[1];
}

/**
 * Runs the example.
 *
 * @param \AdWords\User $user       the user to run the example with
 * @param string      $campaignId the ID of the campaign to update
 */
function updateCampaignExample(\AdWords\User $user, $campaignId)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    // Get the service, which loads the required classes.
    /** @var \AdWords\cm\v201109\CampaignService $campaignService */
    $campaignService = $soapClientFactory->generateSoapClient('Campaign');

    // Create campaign using an existing ID.
    $campaign     = new \AdWords\cm\v201109\Campaign;
    $campaign->id = $campaignId;

    // Updated the budget delivery method.
    $campaign->budget                 = new \AdWords\cm\v201109\Budget;
    $campaign->budget->deliveryMethod = 'ACCELERATED';

    // Create operation.
    $operation           = new \AdWords\cm\v201109\CampaignOperation;
    $operation->operand  = $campaign;
    $operation->operator = 'SET';

    $operations = array($operation);

    // Make the mutate request.
    $result = $campaignService->mutate($operations);

    // Display result.
    $campaign = $result->value[0];
    printf(
        "Campaign with id '%s' has updated budget delivery method '%s'.\n",
        $campaign->id,
        $campaign->budget->deliveryMethod
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
    updateCampaignExample($user, $campaignId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
