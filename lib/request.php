<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- lib
 *	file 				- request.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/
defined('_PATHANG') or die;

//stores the request parameters to request object

class request extends pathang{

	// constructing request object from php request
	public function __construct()
	{
		foreach($_REQUEST as $key => $value)
			$this->$key= $value;
	}
	
	// function to filter the unnecessary html tags from the post data
	public function filterHTML($key)
	{
		$value = $this->$key;
		return htmlentities($value,ENT_COMPAT,'UTF-8');
	}
	
	//function used to filter SQL syntax embeded in the post parameters
	public function filterSQL($key)
	{
		$value = $this->$key;
		return filter_var($value, FILTER_SANITIZE_STRING);  
	}
}