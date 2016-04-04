<?php
session_start();
$login=$_REQUEST['login'];
$password=$_REQUEST['password'];

include 'DB.php';
$result = mysqli_query($con,"SELECT count(*) FROM userreg where userid= '".$login."' and password='".$password."'");
$row = mysqli_fetch_array($result);
if($row['count(*)']== 1){
$_SESSION['SESSION_USERID'] = $login ;
$list=array('login'=>$row['count(*)'],'password'=>$result,'error'=>$_SESSION['SESSION_USERID']);
$c= json_encode($list);
echo $c;

//header("location: login.php");
}
else{
$list=array('login'=>$row['count(*)'],'password'=>$result,'error'=>"Incorrect User Name or Password");
$c= json_encode($list);
echo $c;

}

mysqli_close($con);
?>