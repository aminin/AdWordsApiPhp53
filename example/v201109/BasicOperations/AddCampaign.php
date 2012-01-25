<?php
/**
 * This example adds a campaign.
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
require_once __DIR__ . '/../../../library/AdWords/Autoloader.php';
\AdWords\Autoloader::register();

/**
 * Runs the example.
 *
 * @param AdWordsUser $user the user to run the example with
 */
function addCampaignExample(\AdWords\User $user)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    // Get the service, which loads the required classes.
    /** @var \AdWords\cm\v201109\CampaignService $campaignService */
    $campaignService = $soapClientFactory->generateSoapClient('Campaign');

    // Create campaign.
    $campaign                  = new \AdWords\cm\v201109\Campaign;
    $campaign->name            = 'Interplanetary Cruise #' . uniqid();
    $campaign->status          = 'PAUSED';
    $campaign->biddingStrategy = new \AdWords\cm\v201109\ManualCPC;

    $budget                      = new \AdWords\cm\v201109\Budget;
    $budget->period              = 'DAILY';
    $budget->amount              = new \AdWords\cm\v201109\Money;
    $budget->amount->microAmount = 5e7;
    $budget->deliveryMethod      = 'STANDARD';
    $campaign->budget            = $budget;

    // Set the campaign network options to Google Search and Search Network.
    $networkSetting                             = new \AdWords\cm\v201109\NetworkSetting;
    $networkSetting->targetGoogleSearch         = true;
    $networkSetting->targetSearchNetwork        = true;
    $networkSetting->targetContentNetwork       = false;
    $networkSetting->targetContentContextual    = false;
    $networkSetting->targetPartnerSearchNetwork = false;
    $campaign->networkSetting                   = $networkSetting;

    // Create operation.
    $operation           = new \AdWords\cm\v201109\CampaignOperation;
    $operation->operand  = $campaign;
    $operation->operator = 'ADD';

    $operations = array($operation);

    // Make the mutate request.
    $result = $campaignService->mutate($operations);
    // Display result.
    $campaign = $result->value[0];
    printf("Campaign with name '%s' and id '%s' was added.\n", $campaign->name, $campaign->id);
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
    addCampaignExample($user);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
    //print_r($e);
}
