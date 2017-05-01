<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- root
 *	file 				- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/

//defining a global constant to block direct access to files
define('_PATHANG',true);
// directory separator
define('DS',DIRECTORY_SEPARATOR);

//load the Debug class and pathang class
require_once "lib".DS."pathang.php";
require_once "lib".DS."debug.php";
//creating the instance of kite object
$pathang = pathang::getInstance('pathang');
$pathang->main();
?>
