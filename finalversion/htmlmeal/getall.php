<?php
header('Access-Control-Allow-Origin: *');
 $recid=$_GET['id'];
 echo  $recid;
include 'DB.php';

$result = mysqli_query($con,"select * from rec_images where  rec_images.rec_id=".$recid);
 while ($r = mysqli_fetch_array($result))
    {
        $row[$cnt] = $r;
        $cnt++;

    }
	
$result = mysqli_query($con,"select * from ingredients,recepies where recepies.recid=ingredients.recid && recepies.recid=".$recid);
$r = mysqli_fetch_array($result);

    $json1 = json_encode($r);
	$json2 = json_encode($row);
    echo $json1."+plus+".$json2;
?>
