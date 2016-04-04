<?php
// Create connection
$con=mysqli_connect("localhost","hamzaiba","hamzaiba","iosbuildmeal");
//mysqli_connect(host,username,password,dbname);


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to internet. Database MySQL error: " . mysqli_connect_error();
}

?>

