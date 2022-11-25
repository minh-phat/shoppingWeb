<?php
	

	session_start();
	
	//$_SESSION['url'] = 'shoppingWeb/';
	$_SESSION['url'] = 'https://shoppingwebonline.herokupapp.com/';
	//header('Location: //localhost/shoppingWeb/user/shop.php');
	header('Location: /user/shop.php');
	exit;
?>