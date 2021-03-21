<?php

// #NOTE
//connect.php [file name]
//$server=mysqli_connect(h,du,dp,db); "---Connecting server---"
//h= hostname
//du= database user
//dp= database password
//db= databse name


$hostname="localhost";
$username="root";
$password="";
$databasename="sabinblog";
$server=mysqli_connect($hostname,$username,$password,$databasename);
//if(!$server)
//{
	//echo"Not Connected to DataBase(DB)";
//}
//else
//{
	//echo"Connected to DB succesfully";
//}
?>
