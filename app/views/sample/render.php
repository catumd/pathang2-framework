<?php
	$basket = pathang::getInstance('basket');
	$heading  = $basket->get('heading');
	$message = $basket->get('message');
?>
<style>
a:link,a:visited{
	color:white;
	font-weight:bold;
}
</style>
<div class='message'><?php echo $heading; ?></div>
<p><?php echo $message; ?> </p>