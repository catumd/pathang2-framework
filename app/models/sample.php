<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- app/models
 *	file 				- sample.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/
defined('_PATHANG') or die;
// A sample model class
// with some example comments
class modelSample{

	public function getUsers()
	{
		// sample SQL Operations
		
		/*
		// Sample Select Statement 
		$pdo = kite::getInstance('pdo');
		$table = 'users';
		$stmt = $pdo->query("select * from $table");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result
		
		// Sample Insert Statement;
		$pdo = kite::getInstance('pdo');
		$table = 'users';
		$uname = 'teja';
		$status = 1;
		$pdo->exec("INSERT INTO $table (uname,status) VALUES('$uname',$status)");
		$id = $pdo->lastInsertId();
		return $id;
		*/
	}
	
	//function which returns some data
	public function renderView()
	{
		$heading = "giving wings to developers !";
		$data = "<p>Do you know... you can render this page in three different formats?</p>
		<p> For normal view with template its root_url/render, To get the json format you need to suffix .json to the url... 
		like this root_url/render.json and to display html version by excluding the template... suffix the url with .html ex: root_url/render.html</p>";
		
		$basket = pathang::getInstance('basket');
		$basket->set('heading',$heading);
		$basket->set('message',$data);
	}	
}

?>