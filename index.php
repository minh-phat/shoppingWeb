<?php
	

	session_start();
	
	$_SESSION['url'] = 'http://localhost/shoppingWeb/';
	//header('Location: //localhost/shoppingWeb/user/shop.php');
	header('Location: /user/shop.php');
	exit;
?>