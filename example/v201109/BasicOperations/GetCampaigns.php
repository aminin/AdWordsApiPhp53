<?php
/**
 * This example gets all campaigns in the account. To add a campaign, run
 * AddCampaign.php.
 *
 * Tags: CampaignService.get
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

// Constants used in the example.
define('PAGE_SIZE', 500);

/**
 * Runs the example.
 *
 * @param \AdWords\User $user the user to run the example with
 */
function GetCampaignsExample(\AdWords\User $user)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    // Get the service, which loads the required classes.
    /** @var \AdWords\cm\v201109\CampaignService $campaignService */
    $campaignService = $soapClientFactory->generateSoapClient('Campaign');

    // Create selector.
    $selector             = new \AdWords\cm\v201109\Selector;
    $selector->fields     = array('Id', 'Name');
    $orderBy              = new \AdWords\cm\v201109\OrderBy;
    $orderBy->field       = 'Name';
    $orderBy->sortOrder   = 'ASCENDING';
    $selector->ordering[] = $orderBy;

    // Create paging controls.
    $selector->paging                = new \AdWords\cm\v201109\Paging;
    $selector->paging->startIndex    = 0;
    $selector->paging->numberResults = PAGE_SIZE;

    do {
        // Make the get request.
        $page = $campaignService->get($selector);
        // Display results.
        if (isset($page->entries)) {
            foreach ($page->entries as $campaign) {
                printf("Campaign with name '%s' and id '%s' was found.\n",
                    $campaign->name, $campaign->id);
            }
        } else {
            print "No campaigns were found.\n";
        }

        // Advance the paging index.
        $selector->paging->startIndex += PAGE_SIZE;
    } while ($page->totalNumEntries > $selector->paging->startIndex);
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
    getCampaignsExample($user);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
