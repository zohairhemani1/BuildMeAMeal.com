<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Testing </title>
</head>

<body>
<?php

	include 'DB.php';
	
	$query = "SELECT * FROM recepies LIMIT 50";
	$result = mysqli_query($con,$query);
	
	while($row = mysqli_fetch_array($result)){
		echo $row['recid'];
		echo $row['recname'];
		echo "<br/>";
	}
	
	

?>
</body>
</html>