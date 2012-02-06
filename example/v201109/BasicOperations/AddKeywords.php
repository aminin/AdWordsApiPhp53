<?php
/**
 * This example adds keywords to an ad group. To get ad groups run
 * GetAdGroups.php.
 *
 * Tags: AdGroupCriterionService.mutate
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201109
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

if (!$adGroupId) {
    if (!isset($argv[1]) || !is_numeric($argv[1])) { // or pass ad group id as the first argument
        die("No ad group id given\n");
    }
    $adGroupId = $argv[1];
}

define('NUM_KEYWORDS', 2);

/**
 * Runs the example.
 *
 * @param \AdWords\User $user      the user to run the example with
 * @param string        $adGroupId the ID of the ad group to add the keywords to
 */
function addKeywordsExample(\AdWords\User $user, $adGroupId)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    /** @var \AdWords\cm\v201109\AdGroupService $adGroupCriterionService */
    $adGroupCriterionService = $soapClientFactory->generateSoapClient('AdGroupCriterion');

    // Create keyword criteria.
    $criteria = array();
    for ($i = 0; $i < NUM_KEYWORDS; $i++) {
        $keyword            = new \AdWords\cm\v201109\Keyword;
        $keyword->text      = 'mars cruise ' . uniqid();
        $keyword->matchType = 'BROAD';
        $criteria[]         = $keyword;
    }

    // Create ad group criteria and operations.
    $operations = array();
    foreach ($criteria as $criterion) {
        $adGroupCriterion            = new \AdWords\cm\v201109\BiddableAdGroupCriterion;
        $adGroupCriterion->adGroupId = $adGroupId;
        $adGroupCriterion->criterion = $criterion;

        $operation           = new \AdWords\cm\v201109\AdGroupCriterionOperation;
        $operation->operand  = $adGroupCriterion;
        $operation->operator = 'ADD';
        $operations[]        = $operation;
    }

    // Make the mutate request.
    $result = $adGroupCriterionService->mutate($operations);

    // Display results.
    foreach ($result->value as $adGroupCriterion) {
        printf("Keyword with text '%s', match type '%s', and id '%s' was added.\n",
            $adGroupCriterion->criterion->text,
            $adGroupCriterion->criterion->matchType,
            $adGroupCriterion->criterion->id);
    }
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
    addKeywordsExample($user, $adGroupId);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}
