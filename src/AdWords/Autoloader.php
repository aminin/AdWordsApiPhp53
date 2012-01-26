<?php
/**
 * Factory class for SOAP clients for the AdWords API.
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
 * @package    AdWords
 * @category   WebServices
 * @copyright  {copyright}
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author     Anton Minin <anton.a.minin@gmail.com>
 */

namespace AdWords;

/**
 * Autoloader for AdWords API classes.
 *
 * @package AdWords
 * @aurhor Anton Minin <anton.a.minin@gmail.com>
 */
class Autoloader
{
    /**
     * Registers Autoloader as an SPL autoloader.
     */
    static public function register()
    {
        spl_autoload_register(array(new self, 'autoload'));
    }

    /**
     * Handles autoloading of classes.
     *
     * @param  string  $class  A class name.
     *
     * @return boolean Returns true if the class has been loaded
     */
    static public function autoload($class)
    {
        $class = preg_replace('~^\\\\(.*)~', '\\1', $class);

        if (0 !== strpos($class, __NAMESPACE__)) {
            return;
        }

        $file = sprintf(
            '%s/../%s.php',
            __DIR__,
            str_replace(array('\\', "\0"), array(DIRECTORY_SEPARATOR, ''), $class)
        );

        if (is_file($file)) {
            require $file;
        }
    }
}