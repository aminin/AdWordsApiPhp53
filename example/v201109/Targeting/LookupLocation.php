<?php
/**
 * This example looks up location criteria by name.
 *
 * Tags: LocationCriterionSerivce.get
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

/**
 * Gets a string representation for a location.
 *
 * @param \AdWords\cm\v201109\Location $location the location
 * @return string the string representation
 */
function getLocationString($location)
{
    return sprintf('%s (%s)', $location->locationName, $location->displayType);
}

/**
 * Runs the example.
 *
 * @param \AdWords\User $user the user to run the example with
 */
function lookupLocationExample(\AdWords\User $user)
{
    $soapClientFactory = new \AdWords\SoapClientFactory($user, null, false);
    // Sandbox server
    $soapClientFactory->setServer('https://adwords-sandbox.google.com');
    // Get the service, which loads the required classes.
    /** @var \AdWords\cm\v201109\LocationCriterionService $locationCriterionService */
    $locationCriterionService = $soapClientFactory->generateSoapClient('LocationCriterion');

    // Location names to look up.
    $locationNames = array('Paris', 'Quebec', 'Spain', 'Deutschland');
    // Locale to retrieve location names in.
    $locale = 'en';

    $selector         = new \AdWords\cm\v201109\Selector();
    $selector->fields = array('Id', 'LocationName', 'CanonicalName', 'DisplayType', 'ParentLocations', 'Reach');
    // Location names must match exactly, only EQUALS and IN are supported.
    $selector->predicates[] = new \AdWords\cm\v201109\Predicate('LocationName', 'IN', $locationNames);
    // Only one locale can be used in a request.
    $selector->predicates[] = new \AdWords\cm\v201109\Predicate('Locale', 'EQUALS', $locale);

    // Make the get request.
    $locationCriteria = $locationCriterionService->get($selector);

    // Display results.
    if (isset($locationCriteria)) {
        foreach ($locationCriteria as $locationCriterion) {
            /** @var \AdWords\cm\v201109\LocationCriterion $locationCriterion */
            if (isset($locationCriterion->location->parentLocations)) {
                $parentLocations = implode(
                    ', ',
                    array_map('getLocationString', (array) $locationCriterion->location->parentLocations)
                );
            } else {
                $parentLocations = 'N/A';
            }
            printf(
                "The search term '%s' returned the location '%s' of type '%s' "
                . "with ID '%s', parent locations '%s', and reach '%d'.\n",
                $locationCriterion->searchTerm,
                $locationCriterion->location->locationName,
                $locationCriterion->location->displayType,
                $locationCriterion->location->id,
                $parentLocations,
                $locationCriterion->reach
            );
        }
    } else {
        print "No location criteria were found.\n";
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
    lookupLocationExample($user);
} catch (Exception $e) {
    printf("An error has occurred: %s\n", $e->getMessage());
}