<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BUILD ME A DEAL</title>
</head>

<body>
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
			VALUES ($maxCount,'$method','$ing1','$ing2','$ing3','$ing4','$ing5','$ing6',
       '$ing7','$ing8','$ing9','$ing10','$ing11','$ing12','$ing13','$ing14','$ing15','$ing16',
       '$ing17','$ing18','$ing19','$ing20','$ing21','$ing22','$ing23','$ing24')";
	mysqli_query($con,$query)
	or die('error');
	
	
	echo 'success';
	//image start from here 
	$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 600000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("rec_image/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "rec_image/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}


	mysqli_close($con);
?>
</body>
</html>