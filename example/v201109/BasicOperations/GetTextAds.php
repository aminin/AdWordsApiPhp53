<?php
/**
 * This example gets all text ads in an ad group. To add text ads, run
 * AddTextAds.php. To get ad groups, run GetAdGroups.php
 *
 * Tags: AdGroupAdService.get
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
        die("No ad group id given\n");
    }
    $adGroupId = $argv[1];
}

// Constants used in the example.
define('PAGE_SIZE', 500);

/**
 * Runs the example.
 *
 * @param \AdWords\User $user      the user to run the example with
 * @param string        $adGroupId the id of the parent ad group
 */
function getTextAdsExample(\AdWords\User $user, $adGroupId)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    /** @var \AdWords\cm\v201109\AdGroupAdService $adGroupAdService */
    $adGroupAdService = $soapClientFactory->generateSoapClient('AdGroupAd');

    // Create selector.
    $selector             = new \AdWords\cm\v201109\Selector();
    $selector->fields     = array('Headline', 'Id');
    $ordering             = new \AdWords\cm\v201109\OrderBy;
    $ordering->field      = 'Headline';
    $ordering->sortOrder  = 'ASCENDING';
    $selector->ordering[] = $ordering;

    // Create predicates.
    $predicate1             = new \AdWords\cm\v201109\Predicate;
    $predicate1->field      = 'AdGroupId';
    $predicate1->operator   = 'IN';
    $predicate1->values     = array($adGroupId);
    $predicate2             = new \AdWords\cm\v201109\Predicate;
    $predicate2->field      = 'AdType';
    $predicate2->operator   = 'IN';
    $predicate2->values     = array('TEXT_AD');
    // By default disabled ads aren't returned by the selector. To return them
    // include the DISABLED status in a predicate.
    $predicate3             = new \AdWords\cm\v201109\Predicate;
    $predicate3->field      = 'Status';
    $predicate3->operator   = 'IN';
    $predicate3->values     = array('ENABLED', 'PAUSED', 'DISABLED');

    $selector->predicates[] = $predicate1;
    $selector->predicates[] = $predicate2;
    $selector->predicates[] = $predicate3;

    // Create paging controls.
    $selector->paging = new \AdWords\cm\v201109\Paging;
    $selector->paging->numberResults = PAGE_SIZE;
    $selector->paging->startIndex    = 0;

    do {
        // Make the get request.
        $page = $adGroupAdService->get($selector);

        // Display results.
        if (isset($page->entries)) {
            foreach ($page->entries as $adGroupAd) {
                printf(
                    "Text ad with headline '%s' and id '%s' was found.\n",
                    $adGroupAd->ad->headline,
                    $adGroupAd->ad->id
                );
            }
        } else {
            print "No text ads were found.\n";
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
    getTextAdsExample($user, $adGroupId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
