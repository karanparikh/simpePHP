<?php
	session_start();
	include "info.php";
	$user = $_REQUEST['user'];
	$pswd = $_REQUEST['password'];
	$query = "Select * from member where name='$user' and pswd=password('$pswd')";
	$result = mysql_query($query) or die("Could not execute query!");
	$nrows  = mysql_num_rows($result);
	if($nrows == 0){
		$_SESSION['error'] = "Invalid login information";
		header("Location: login.php");
		exit();
	}
	else{
		$_SESSION['login'] = "true";
		$_SESSION['user']  = $user;
		header("Location: profile.php");
		exit();
	}
?>

