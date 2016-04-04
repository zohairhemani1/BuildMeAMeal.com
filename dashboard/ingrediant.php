<?php

	include 'DB.php';
	$recname = $_POST['recname'];
	$method = $_POST['method'];
	$ing1 = $_POST['ing1'];
	$ing2 = $_POST['ing2'];
	$ing3 = $_POST['ing3'];
	$ing4 = $_POST['ing4'];
	$ing5 = $_POST['ing5'];
	$ing6 = $_POST['ing6'];
	$ing7 = $_POST['ing7'];
	$ing8 = $_POST['ing8'];
	$ing9 = $_POST['ing9'];
	$ing10 = $_POST['ing10'];
	$ing11 = $_POST['ing11'];
	$ing12 = $_POST['ing12'];
	$ing13 = $_POST['ing13'];
	$ing14 = $_POST['ing14'];
	$ing15 = $_POST['ing15'];
	$ing16 = $_POST['ing16'];
	$ing17 = $_POST['ing17'];
	$ing18 = $_POST['ing18'];
	$ing19 = $_POST['ing19'];
	$ing20 = $_POST['ing20'];
	$ing21 = $_POST['ing21'];
	$ing22 = $_POST['ing22'];
	$ing23 = $_POST['ing23'];
	$ing24 = $_POST['ing24'];

	
	
	$query = "INSERT INTO recepies(recname)
	VALUES ('$recname')";
	mysqli_query($con,$query);
	$query = "SELECT max(recid) AS count from recepies";
	$result = mysqli_query($con,$query)
	or die('error');
	$row = mysqli_fetch_array($result);
	
	$maxCount = $row['count'];
	$query = "INSERT INTO ingredients(recid,method,ing1,ing2,ing3,ing4,ing5,ing6,ing7,
                        ing8,ing9,ing10,ing11,ing12,ing13,ing14,ing15,ing16,ing17,ing18,
                        ing19,ing20,ing21,ing22,ing23,ing24) 
			VALUES ('$maxCount','$method','$ing1','$ing2','$ing3','$ing4','$ing5','$ing6',
       '$ing7','$ing8','$ing9','$ing10','$ing11','$ing12','$ing13','$ing14','$ing15','$ing16',
       '$ing17','$ing18','$ing19','$ing20','$ing21','$ing22','$ing23','$ing24')";
	mysqli_query($con,$query)
	or die('error');
	
	
	include 'rec_image.php';
	
	
		$query_image = "INSERT INTO rec_images(rec_id,img_name)
		VALUES ('$maxCount','$imageName')";
		mysqli_query($con,$query_image);
	
	mysqli_close($con);
	
?>