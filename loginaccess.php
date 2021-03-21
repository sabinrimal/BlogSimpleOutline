<?php
include('connect.php');
echo"<br>"."<br>";
if(isset($_POST['LogIn']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$check="Select * from firstblog where username='$username' and password='$password'";
$checked=mysqli_query($server,$check);
$num=mysqli_num_rows($checked);
	if($num!==1)
	{
		echo"Login Invalid! Please use valid information.";
	}
	else
	{
		//echo"Congratulations Your Login Is Succesful";
		//header('location:firstblognext.php');
		session_start();
		$_SESSION['mysession']=$username;
		header('location:firstblognext.php');
	}
}
?>