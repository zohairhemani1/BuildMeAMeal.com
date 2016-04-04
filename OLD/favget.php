<?php
header('Access-Control-Allow-Origin: *');
session_start();
$user=$_SESSION['SESSION_USERID'];
$favArray = array();

include 'DB.php';
$result = mysqli_query($con,"
Select recid from fav
where userid='".$user."'");

while ($r = mysqli_fetch_assoc($result)) {

  		$favArray[] = $r;

    }

   echo json_encode($favArray);

mysqli_close($con);
?>