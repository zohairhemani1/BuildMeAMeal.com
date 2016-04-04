<?php
	header('Access-Control-Allow-Origin: *');
	session_start();
	$user="super";
	$favbool=$_GET['fav'];
	$rec = $_GET['rec'];
	
	
	include 'DB.php';
	
	 if ($favbool==-1)
	{
		$result = mysqli_query($con,"
		Insert INTO fav
		( userid, recid)
		VALUES
		( '".$user."', '".$rec."')");
		
		$list['status'] = "success";
		$list['user'] = $user;
		$list['recID'] = $rec;
		$list['favBool'] = $favbool;
		
	}
		else if ($favbool>-1)
	{
		$result = mysqli_query($con,"
		delete from fav where
		userid='$user' AND recid = '$rec'");
		$list['status'] = "success";
		$list['user'] = $user;
		$list['recID'] = $rec;
		$list['favBool'] = $favbool;
		
	}
	else
	{
		echo "NOTHING HAPPENED.";
	}
	
	echo json_encode($list);
	
	//mysqli_close($con);
?>