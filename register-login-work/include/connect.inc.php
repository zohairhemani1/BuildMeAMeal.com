<?php

$db_host = "localhost"; 

$db_username = "zohairhemani";  

$db_pass = "Pavilion786!";  

$db_name = "buildmeameal"; 

// Run the connection here  

$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldnot Connect to Database!"); 
mysql_select_db("$db_name") or die ("No Database!");    

?>