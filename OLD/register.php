<?php
$user=$_REQUEST['userid'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];

include 'DB.php';
	
$result = mysqli_query($con,"SELECT count(*) FROM userreg where userid= '".$user."'");
$row = mysqli_fetch_array($result);

$list=array('login'=>"",'password'=>"",'emailerror'=>"",'done'=>"");


if($row['count(*)']== 0){
//$list['login']="userid available";

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
  $list['emailerror']= "Invalid email format"; 
}
else {  
	$result = mysqli_query($con,"INSERT INTO `userreg` (`userid`, `email`, `password`) VALUES
('".$user."', '".$email."','".$password."')");
//$row = mysqli_fetch_array($result);//possible error
//$list['emailerror']= "Valid email format"; 
$list['done']= "Success"; 

}
}
else{
$list['login']="userid not available";
}
$c= json_encode($list);
echo $c;
mysqli_close($con);

?>