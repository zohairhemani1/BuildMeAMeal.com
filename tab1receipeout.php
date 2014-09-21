<?php
session_start();
$receipe=$_REQUEST['input'];
$i=-1;
include 'DB.php';
$result = mysqli_query($con,"SELECT * FROM `recepies` where recname LIKE  '%".$receipe."%'");


/** @noinspection PhpAssignmentInConditionInspection */
while ($row = mysql_fetch_array($result)){
   
  
 
    $recid= $row['recid'];
	
    $recname= $row['recname'];

    $list[] = array("recid" => $recid, "recname" => $recname);
 
  }	
	
$c= json_encode($list);
echo $c;

mysqli_close($con);
?>