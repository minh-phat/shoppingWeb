<?php
	

	session_start();
	
	//$_SESSION['url'] = 'shoppingWeb/';
	$_SESSION['url'] = '';
	//header('Location: //localhost/shoppingWeb/user/shop.php');
	header('Location: /user/shop.php');
	exit;
?>