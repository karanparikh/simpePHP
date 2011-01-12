<?php
	session_start();
	include "info.php";
	if($_SESSION['login'] == "true"){
		$user = $_SESSION['user'];
		$query = "Select * from member where name='$user'";
		$result = mysql_query($query) or die("Could not execute the query");
		while($row=mysql_fetch_array($result)){
			extract($row);
			echo "$name, $age, $email"."<br>";
			echo "<a href='logout.php'>Log out</a>";
		}
	}
	else{
		$_SESSION['error'] = "Please log in";
		header("Location: login.php");
		exit();
	}
?>
