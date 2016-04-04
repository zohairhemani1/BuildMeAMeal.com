<?php
session_start();
include 'DB.php';
$list[] = array("count" =>  15);
$c= json_encode($list);
echo $c;

if ($_REQUEST['tab']==1){
    $receipe=$_REQUEST['input'];
if ($_REQUEST['count']==1){

//count
$result = mysqli_query($con,"SELECT Count(*) FROM `recepies` where recname LIKE  '%".$receipe."%'");
$row = mysql_fetch_array($result);
$list[] = array("count" =>  $row['Count(*)']);
$c= json_encode($list);
echo $c;
}
else{
$c= json_encode($list);
echo $c;
}
}
else if ($_REQUEST['tab']==2){
if ($_REQUEST['count']==1){
//count
//in progress
$result = mysqli_query($con,"SELECT Count(*) FROM `ingredients` where ing1 LIKE  '%".$receipe."%'");
$row = mysql_fetch_array($result);
$list[] = array("count" =>  $row['Count(*)']);
$c= json_encode($list);
echo $c;
}
else{
$c= json_encode($list);
echo $c;
}
}
else{
if ($_REQUEST['count']==1){
//count
$result = mysqli_query($con,"SELECT Count(*) FROM `recepies`"); 
$row = mysql_fetch_array($result);
$list[] = array("count" =>  $row['Count(*)']);
$c= json_encode($list);
echo $c;
}
else{
$c= json_encode($list);
echo $c;

/*
$i=-1;
$result = mysqli_query($con,"SELECT  FROM `recepies`");

	
 while ($row = mysql_fetch_array($result)){
   
 
 
    $recid= $row['recid'];
	
    $recname= $row['recname'];

    $list[] = array("recid" => $recid, "recname" => $recname);
 
  }	
	
$c= json_encode($list);
echo $c;


*/
}
}



mysqli_close($con);
/*

select count(*) from ingredients  where (ing1 like '%choc%' or ing2 like '%choc%' or 
ing3 like '%choc%' or ing4 like '%choc%' or ing5 like '%choc%' or ing6 like '%choc%'
 or ing7 like '%choc%' or ing8 like '%choc%' or ing9 like '%choc%' or ing10 like '%choc%'
 or ing11 like '%choc%' or ing12 like '%choc%' or ing13 like '%choc%' or ing14 like '%choc%
 ' or ing15 like '%choc%'or ing16 like '%choc%' or ing17 like '%choc%'  or ing18 like '%choc%'
  or ing19 like '%choc%' or ing20 like '%choc%' or ing21 like '%choc%'  or ing22 like '%choc%'
  or ing23 like '%choc%' or ing24 like '%choc%')
  or 
  (ing1 like '%cream%' or ing2 like '%cream%'
  or ing3 like '%cream%' or ing4 like '%cream%' or ing5 like '%cream%' or ing6 like '%cream%' or 
  ing7 like '%cream%' or ing8 like '%cream%' or ing9 like '%cream%' or ing10 like '%cream%' or 
  ing11 like '%cream%' or ing12 like '%cream%' or ing13 like '%cream%' or ing14 like '%cream%'
  or ing15 like '%cream%'or ing16 like '%cream%' or ing17 like '%cream%'  or ing18 like '%cream%'
  or ing19 like '%cream%' or ing20 like '%cream%' or ing21 like '%cream%'  or ing22 like '%cream%'
  or ing23 like '%cream%' or ing24 like '%cream%') 
  or 
  (ing1 like '%pasta%' or ing2 like '%pasta%' 
  or ing3 like '%pasta%' or ing4 like '%pasta%' or ing5 like '%pasta%' or ing6 like '%pasta%' or 
  ing7 like '%pasta%' or ing8 like '%pasta%' or ing9 like '%pasta%' or ing10 like '%pasta%' or ing11 
  like '%pasta%' or ing12 like '%pasta%' or ing13 like '%pasta%' or ing14 like '%pasta%' or ing15 like
  '%pasta%'or ing16 like '%pasta%' or ing17 like '%pasta%'  or ing18 like '%pasta%'
  or ing19 like '%pasta%' or ing20 like '%pasta%' or ing21 like '%pasta%'  or ing22 
  like '%pasta%' or ing23 like '%pasta%' or ing24 like '%pasta%')

*/
?>










