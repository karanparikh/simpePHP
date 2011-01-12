<?php
	session_start();
	include "info.php";
	if(isset($_SESSION['error'])){
		echo $_SESSION['error']."<br>";
		unset($_SESSION['error']);
	}
	echo "<form action='loginprocess.php' method='POST'>";
	echo "<input type='text' name='user'>Username"."<br>";
	echo "<input type='password' name='password'>Password"."<br>";
	echo "<input type='submit' value='Log in'>";
?>


