
<a href="logout.php"><button>LogOut</button></a>
<br>
<br>

<form action="insertblogs.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="title" id="title" placeholder="blog title" ><br>
	<select name="blogtype">
		<option>Select One</option>
		<option value="national">National</option>
		<option value="international">International</option>
		<option value="science">Science</option>
		<option value="technology">Technology</option>
		<option value="natural">Natural</option>
		<option value="fantasy">Fantasy</option>
		<option value="food">Food</option>
	</select><br>
	<input type="text" name="description" id="description" placeholder="blog deacription" ><br>
	<input type="file" name="image" id="image" placeholder="blog image" required><br>		
	<br>
	<input type="submit" value="Submit" name="Submit">
</form>