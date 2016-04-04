<?php
session_start();
include 'DB.php';
$user=$_SESSION['SESSION_USERID'];
$cnt=0;


$list= array('add' => '' );
if ($_REQUEST['tab']=='1'){
    $receipe=$_REQUEST['input'];
if ($_REQUEST['count']=='1'){

//count
$result = mysqli_query($con,"SELECT Count(*) FROM `recepies` where recname LIKE  '%".$receipe."%'");
    $row = mysqli_fetch_array($result);
    $list['add']= $row['Count(*)'];
    $c= json_encode($list);
    echo $c;
}

else{
    //abc
$result = mysqli_query($con,"  select recepies.recid,recepies.recname,ingredients.method
from ingredients,recepies  where (ingredients.recid=recepies.recid) and recepies.recname LIKE  '%".$receipe."%'  

GROUP BY recepies.recname
 ORDER BY CASE WHEN recepies.recname like '".$receipe." %' THEN 0  
               WHEN recepies.recname like '".$receipe."%' THEN 1   
               WHEN recepies.recname like '% ".$receipe."%' THEN 2  
               ELSE 3
          END, recepies.recname LIMIT 10");


    while ($r = mysqli_fetch_array($result))
    {
        $row[$cnt] = $r;
        $cnt++;

    }
    $json = json_encode($row);
    echo $json;
    //abc
}


}
else if ($_REQUEST['tab']=='2'){
 $ingre1=$_REQUEST['ingre1'];
    $ingre2=$_REQUEST['ingre2'];
    $ingre3=$_REQUEST['ingre3'];
    $brunch=$_REQUEST['brunch'];



if ($ingre1){$abc="(ing1 like '%".$ingre1."%' or ing2 like '%".$ingre1."%' or
ing3 like '%".$ingre1."%' or ing4 like '%".$ingre1."%' or ing5 like '%".$ingre1."%' or ing6 like '%".$ingre1."%'
 or ing7 like '%".$ingre1."%' or ing8 like '%".$ingre1."%' or ing9 like '%".$ingre1."%' or ing10 like '%".$ingre1."%'
 or ing11 like '%".$ingre1."%' or ing12 like '%".$ingre1."%' or ing13 like '%".$ingre1."%' or ing14 like '%choc%
 ' or ing15 like '%".$ingre1."%'or ing16 like '%".$ingre1."%' or ing17 like '%".$ingre1."%'  or ing18 like '%".$ingre1."%'
  or ing19 like '%".$ingre1."%' or ing20 like '%".$ingre1."%' or ing21 like '%".$ingre1."%'  or ing22 like '%".$ingre1."%'
  or ing23 like '%".$ingre1."%' or ing24 like '%".$ingre1."%')";}
  else{$abc="1=1";}

  if ($ingre2){$def="(ing1 like '%".$ingre2."%' or ing2 like '%".$ingre2."%'
  or ing3 like '%".$ingre2."%' or ing4 like '%".$ingre2."%' or ing5 like '%".$ingre2."%' or ing6 like '%".$ingre2."%' or
  ing7 like '%".$ingre2."%' or ing8 like '%".$ingre2."%' or ing9 like '%".$ingre2."%' or ing10 like '%".$ingre2."%' or
  ing11 like '%".$ingre2."%' or ing12 like '%".$ingre2."%' or ing13 like '%".$ingre2."%' or ing14 like '%".$ingre2."%'
  or ing15 like '%".$ingre2."%'or ing16 like '%".$ingre2."%' or ing17 like '%".$ingre2."%'  or ing18 like '%".$ingre2."%'
  or ing19 like '%".$ingre2."%' or ing20 like '%".$ingre2."%' or ing21 like '%".$ingre2."%'  or ing22 like '%".$ingre2."%'
  or ing23 like '%".$ingre2."%' or ing24 like '%".$ingre2."%')";}
  else{$def="(1=1)";}
  
  if ($ingre3){$ghi="(ing1 like '%".$ingre3."%' or ing2 like '%".$ingre3."%'
  or ing3 like '%".$ingre3."%' or ing4 like '%".$ingre3."%' or ing5 like '%".$ingre3."%' or ing6 like '%".$ingre3."%' or
  ing7 like '%".$ingre3."%' or ing8 like '%".$ingre3."%' or ing9 like '%".$ingre3."%' or ing10 like '%".$ingre3."%' or ing11
  like '%".$ingre3."%' or ing12 like '%".$ingre3."%' or ing13 like '%".$ingre3."%' or ing14 like '%".$ingre3."%' or ing15 like
  '%".$ingre3."%'or ing16 like '%".$ingre3."%' or ing17 like '%".$ingre3."%'  or ing18 like '%".$ingre3."%'
  or ing19 like '%".$ingre3."%' or ing20 like '%".$ingre3."%' or ing21 like '%".$ingre3."%'  or ing22
  like '%".$ingre3."%' or ing23 like '%".$ingre3."%' or ing24 like '%".$ingre3."%')";}
  else{$ghi="(1=1)";}



if ($_REQUEST['count']=='1'){
//count
//in progress

$result = mysqli_query($con,"select Count(*) from ingredients  where ".$abc."
  & ".$def." & ".$ghi);



    $row = mysqli_fetch_array($result);
    $list['add']= $row['Count(*)'];
    $c= json_encode($list);
    echo $c;
}
else{

$result = mysqli_query($con,"select recepies.recid,recepies.recname,ingredients.method 
from ingredients,recepies  where (ingredients.recid=recepies.recid)&(".$abc."
  or ".$def." or ".$ghi." )LIMIT 10");
    while ($r = mysqli_fetch_assoc($result)) {

        $row[$cnt] = $r;
        $cnt++;

    }
    echo json_encode($row);



}
}
else{
if ($_REQUEST['count']=='1'){
//count

$result = mysqli_query($con,"SELECT Count(*) FROM `recepies`");
    $row = mysqli_fetch_array($result);
    $list['add']= $row['Count(*)'];
    $c= json_encode($list);
    echo $c;
}
else if ($_REQUEST['count']=='3'){
//count

$result = mysqli_query($con,"select * from fav,recepies,ingredients where fav.userid='".$user."'
 and fav.recid=recepies.recid and ingredients.recid=fav.recid LIMIT 10");
   while ($r = mysqli_fetch_array($result)) {

        $row[$cnt] = $r;
        $cnt++;

    }

    $json = json_encode($row);
    echo $json;
}

else{
$result = mysqli_query($con,"select recepies.recid,recepies.recname,ingredients.method 
from ingredients,recepies  where (ingredients.recid=recepies.recid) LIMIT 10");
    while ($r = mysqli_fetch_array($result)) {

        $row[$cnt] = $r;
        $cnt++;

    }

    $json = json_encode($row);
    echo $json;


}
}

?>
