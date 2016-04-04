<?php

	include 'DB.php';
	$recid = $_GET['recid'];
	//echo "RECID:" . $recid;
	
	$query = "DELETE FROM `recepies` WHERE recid = '$recid' "; 
	mysqli_query($con,$query);
	
	
	echo "Successfully Deleted!";
	
	
	

?>