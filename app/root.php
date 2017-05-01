<?php
/*	PATHANG		- A SLEAK PHP MVC FRAMEWORK
 *	package 		- app
 *	file 				- controller.php
 * 	Developer 		- Krishna Teja G S
 *	Website		- http://www.pathang.net
 *	license			- GNU General Public License version 2 or later
*/

defined('_PATHANG') or die;
//The central controller of the application
// each method corresponds to the urls first fragment

class controllerRoot{

	//This is the function called if no node is defined in the url
	public function main()
	{
		pathang::render('sample');
	}
	
	public function about()
	{
		//calling request object and setting the page and color to be used in the template page
		$request = pathang::getInstance('request');
		$request->page = 'color';
		$request->color = 'orange';
		
		//identifying the user from the nodes
		$node = pathang::getInstance('node');
		$user = $node->get('n2');
		//based on the node switching between controllers
		if($user!=null)
			pathang::getController('sample',$user);
		else
			pathang::render('sample','about');
	}
	
	public function render()
	{
		//calling a model class and tiggering a method
		$model = pathang::getModel('sample');
		$model->renderView();
	
		//changing the parameters of kite to load a different page with a color
		$request = pathang::getInstance('request');
		$request->page = 'color';
		$request->color = 'blue';
		
		pathang::render('sample','render');		
	}
	
	public function theme()
	{
		$request = pathang::getInstance('request');
		$request->page = 'color';
		$request->color = 'voilet';
		pathang::render('sample','themes');
	}	

}

?>