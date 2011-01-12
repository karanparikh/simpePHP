<?php
	session_start();
	include "info.php";
	if($_SESSION['login'] == 'true'){
		unset($_SESSION);	
		session_destroy();
		header("Location: login.php");
		exit();
	}
	else{
		$_SESSION['error'] = "Please log in";
		header("Location: login.php");
		exit();
	}
?>
