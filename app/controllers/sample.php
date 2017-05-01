<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- app/controllers
 *	file 				- sample.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/
defined('_PATHANG') or die;

// An additional controller 
class controllerSample{
	
	// user Teja
	public function teja()
	{
		$request = pathang::getInstance('request');
		$request->page = 'color';
		$request->color = 'green';
		pathang::render('sample','teja');
	}
	
	//User Krishna	
	public function krishna()
	{
		$request = pathang::getInstance('request');
		$request->page = 'color';
		$request->color = 'red';		
		pathang::render('sample','krishna');
	}
}
?>