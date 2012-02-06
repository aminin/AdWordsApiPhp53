<?php
/**
 * This example deletes an ad. To get text ads, run GetTextAds.php.
 *
 * Tags: AdGroupAdService.mutate
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

$adGroupId = null; // insert ad group id here
$adId      = null; // insert ad id here

if (!$adGroupId) {
    if (!isset($argv[1]) || !is_numeric($argv[1])) { // or pass ad group id as the first argument
        die("No ad group id given\n");
    }
    $adGroupId = $argv[1];
}

if (!$adId) {
    if (!isset($argv[2]) || !is_numeric($argv[2])) { // or pass ad id as the second argument
        die("No ad id given\n");
    }
    $adId = $argv[2];
}

/**
 * Runs the example.
 *
 * @param \AdWords\User $user      the user to run the example with
 * @param string        $adGroupId the id of the ad group the ad is in
 * @param string        $adId      the id of the ad
 */
function deleteAdExample(\AdWords\User $user, $adGroupId, $adId)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    /** @var \AdWords\cm\v201109\AdGroupService $adGroupAdService */
    $adGroupAdService = $soapClientFactory->generateSoapClient('AdGroupAd');

    // Create base class ad to avoid setting type specific fields.
    $ad     = new \AdWords\cm\v201109\Ad();
    $ad->id = $adId;

    // Create ad group ad.
    $adGroupAd            = new \AdWords\cm\v201109\AdGroupAd;
    $adGroupAd->adGroupId = $adGroupId;
    $adGroupAd->ad        = $ad;

    // Create operation.
    $operation           = new \AdWords\cm\v201109\AdGroupAdOperation;
    $operation->operand  = $adGroupAd;
    $operation->operator = 'REMOVE';

    $operations = array($operation);

    // Make the mutate request.
    $result = $adGroupAdService->mutate($operations);

    // Display result.
    $adGroupAd = $result->value[0];
    printf("Ad with id '%s' was deleted.\n", $adGroupAd->ad->id);
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
    deleteAdExample($user, $adGroupId, $adId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
