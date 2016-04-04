<?php
session_start();
$user=$_SESSION['SESSION_USERID'];

include 'DB.php';
$result = mysqli_query($con,"
REPLACE INTO qstrack
( userid, qs1,qs2,qs3,qs4,qs5,qs6,qs7,qs8,qs9,qs10,qs11,qs12)
VALUES
( '".$user."', '".$_REQUEST['q1']."', '".$_REQUEST['q2']."','".$_REQUEST['q3']."','".$_REQUEST['q4']."',
'".$_REQUEST['q5']."','".$_REQUEST['q6']."','".$_REQUEST['q7']."','".$_REQUEST['q8']."','".$_REQUEST['q9']."',
'".$_REQUEST['q10']."','".$_REQUEST['q11']."','".$_REQUEST['q12']."')
");

$list=array('status'=>"Success");
$c= json_encode($list);
echo $c;

mysqli_close($con);
?>