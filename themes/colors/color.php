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
    <link href="<?php echo ROOT.'themes'.DS.'colors'.DS.'style.css';?>" rel="stylesheet">
	<link href="<?php echo ROOT.'themes'.DS.'colors'.DS.'kolor.css';?>" rel="stylesheet">
  </head>
  
  <?php
		$request = pathang::getInstance('request');
		$color = $request->get('color');
	?>

<body class="<?php echo $color; ?>">
	<div class="page">
		<?php pathang::app(); ?>
	  </div>	
  </body>
</html>
