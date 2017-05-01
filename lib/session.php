<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- lib
 *	file 				- session.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/
defined('_PATHANG') or die;

// A class to store sessions

class session {
		
	// function to start the session
	public static function start()
	{
		if(session_id() == '') {
		session_start();
		}
	}
	
	// function to set the key and value in PHP session
	public static function set($key,$value)
	{
		$_SESSION[$key]=$value;
	}
	
	// function to retrieve the value based on key from PHP session
	public static function get($key)
	{
		if(isset($_SESSION[$key]))
			return $_SESSION[$key];
		else
			return null;
	}
	
	// function to clear the value of key in the session
	public static function clear($key)
	{
		if(isset($_SESSION[$key]))
		{
			unset($_SESSION[$key]);
			return true;
		}
		else
			return false;
	}
	
	// function to completely destroy the session
	public static function destroy()
	{
		session_unset();
		session_destroy();
	}

}
?>