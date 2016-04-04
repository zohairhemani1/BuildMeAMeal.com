<?php
header('Access-Control-Allow-Origin: *');
session_start();
$user=$_SESSION['SESSION_USERID'];

include 'DB.php';
$list=array('userid'=>$user,'qs1'=>'N','qs2'=>'N','qs3'=>'N','qs4'=>'N','qs5'=>'N','qs6'=>'N',
'qs7'=>'N','qs8'=>'Y','qs9'=>'N','qs10'=>'N','qs11'=>'N','qs12'=>'N');
$result = mysqli_query($con,"Select * from qstrack where userid='".$user."'");
//$row = mysql_fetch_assoc($result);
$row = mysqli_fetch_array($result);

if(!$result) {
$c= json_encode($list);
echo $c;
}
else{
$list['qs1']= $row['qs1'];
$list['qs2']= $row['qs2'];
$list['qs3']= $row['qs3'];
$list['qs4']= $row['qs4'];
$list['qs5']= $row['qs5'];
$list['qs6']= $row['qs6'];
$list['qs7']= $row['qs7'];
$list['qs8']= $row['qs8'];
$list['qs9']= $row['qs9'];
$list['qs10']= $row['qs10'];
$list['qs11']= $row['qs11'];
$list['qs12']= $row['qs12'];
$c= json_encode($list);
echo $c;}
mysqli_close($con);
?>