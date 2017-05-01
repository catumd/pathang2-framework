<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php pathang::Meta('desc'); ?>">
    <meta name="author" content="<?php pathang::Meta('author'); ?>">
	 <meta name="keywords" content="<?php pathang::Meta('keywords'); ?>">
    <link rel="shortcut icon" href="<?php echo ROOT;?>favicon.ico">
    <title><?php pathang::Meta('title'); ?></title>
    <link href="<?php echo ROOT.'themes'.DS.'super'.DS.'style.css';?>" rel="stylesheet">
  </head>
  
  <?php
		$request = pathang::getInstance('request');
		$color = $request->get('color');
	?>
  <body>
	<div class="box">
		<div>Now the page is rendered in <b>super</b> theme </div>
	</div>
	<div class="container">
	  <div class="page">
		<?php pathang::app(); ?>
	  </div>	
	 </div> 
  </body>
</html>
