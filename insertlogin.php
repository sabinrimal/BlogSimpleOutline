<?php
include("connect.php");
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$password=$_POST["password"];
$toinsert="Insert into firstblog(firstname,lastname,username,password)values('$firstname','$lastname','$username','$password')";
$result=mysqli_query($server,$toinsert);
//server is connection variable from connect.php which is included at top
echo"<br>";
if(!$result)
{
	echo"Insert Error";
}
else
{
	header('location:firstblog.php');
	echo "Successfully Registered";
}
?>
