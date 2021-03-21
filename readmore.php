<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<?php 
include ('connect.php');
$id=$_GET['id'];
$blogtype=$_GET['blogtype'];
$toinsert="Select * from addblog where id='$id' ";
$result=mysqli_query($server,$toinsert);
$folder="image/";
?>


<?php
while($row=mysqli_fetch_array($result))
{
?>
<div class="container">
	<div class="col-md-8">
				<h1><?php echo $row['title']?>:</h1>
				<img src="<?php echo $folder.$row['image']?>" style="width: 80%; height: 80%;">
				<p  class="container"><?php echo $row['description']?></p>
				<p> 
					<?php echo $row['uploadby']; ?> 
					<br>
					<?php echo $row['uploadon']; ?>
				</p>
	</div>
</div>
<?php
}
?>


<!-- <br><br>
<div>
	<h1><b>Similar Blogs:</b></h1>
<?php
	//echo "<h3><a href='#'><b>$cat</b></a></h3>";
?>
</div> -->
