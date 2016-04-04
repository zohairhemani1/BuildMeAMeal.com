<?php
	
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	require_once 'include/connect.inc.php';
	
	$query = "INSERT INTO users (username,password) VALUES('$username','$password')";
	mysqli_query($con,$query);
	mysqli_close($con);
	
	
?>