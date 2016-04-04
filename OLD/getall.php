<?php
session_start();

include 'DB.php';
$id=$_REQUEST['id'];
$result1 = "SELECT * FROM ingredients where recid= '".$id."'";
$result2= "SELECT recname FROM recepies where recid= '".$id."'";
$query = "(".$result1.") UNION (".$result2.")";

echo $query;
$resultf= mysqli_query($con,$query);
$row = mysqli_fetch_array($resultf);
$c= json_encode($row);
echo $c;

mysqli_close($con);
?>