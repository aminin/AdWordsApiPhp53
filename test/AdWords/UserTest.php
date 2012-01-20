<?php

namespace AdWordsTest;

use \AdWords\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    private $userSettings = array();

    public function setUp()
    {
        $iniFilename = __DIR__ . '/../test.ini';

        if (file_exists($iniFilename)) {
            $ini = parse_ini_file($iniFilename, true);
            $this->userSettings = $ini['user'];
        } else {
            $this->fail('Ini file not found');
        }
    }

    public function testGetAuthToken()
    {
        $user = new User;
        $user->setEmail($this->userSettings['email']);
        $user->setPassword($this->userSettings['password']);
        $user->setAuthToken($this->userSettings['authToken']);

        $authToken = $user->getAuthToken();
        $this->assertNotEmpty($authToken, 'Expected not empty auth token');
    }
}

