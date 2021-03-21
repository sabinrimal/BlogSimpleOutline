<?php
	session_start();
	$user=$_SESSION['mysession'];
	echo $user;

include("connect.php");
if (filter_has_var(INPUT_POST, 'Submit')) {
	$title=$_POST["title"];
	$blogtype=$_POST["blogtype"];
	$description=$_POST["description"];
	$image=$_FILES["image"]["name"];
	$timage=$_FILES["image"]["tmp_name"];
	$folder="image/";
	$date=date("Ymd");
	if (move_uploaded_file($timage,$folder.$image)) {
		$toinsert="Insert into addblog(title,blogtype,description,image,uploadby,uploadon) values('$title','$blogtype','$description','$image','$user','$date')";
		$result=mysqli_query($server,$toinsert);
	}

		if(!$result)
		{
			echo "Sorry Can't Uplaod Your Blog.";
		}
		else
		{
			header('location:firstblognext.php');
		}
}

//server is connection variable from connect.php which is included at top
?>
