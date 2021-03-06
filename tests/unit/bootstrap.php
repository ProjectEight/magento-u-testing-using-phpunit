<?php
/**
 * ProjectEight
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact ProjectEight for more information.
 *
 * @category    ProjectEight
 * @package     magento1-testing-using-phpunit.local
 * @copyright   Copyright (c) 2017 ProjectEight
 * @author      ProjectEight
 *
 */
/**
 * Testing in Magento 1
 * @link https://gist.github.com/ProjectEight/43f7bc8b0db57b88a85a1d7d74db2a83
 */

// No need to initialise the Magento environment beyond the autoloader for unit tests
require_once __DIR__ . '/../../www/app/Mage.php';

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
	if(E_WARNING === $errno
	   && 0 === strpos($errstr, 'include(')
	   && substr($errfile, -19) == 'Varien/Autoload.php') {
		return null;
	}
	// Delegate to the standard PHP error handler by returning false
	return false;
});
