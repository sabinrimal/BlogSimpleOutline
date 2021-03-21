<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  		<link href="https://fonts.googleapis.com/css?family=Aclonica&display=swap" rel="stylesheet">
  	<style type="text/css">
  		a{
  			color: black;
  			text-decoration: none;
  			cursor: pointer;
  		}
  		body{
  			background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIamy_rLubWBuTg-2-dSDSRz4pjHrcOQ9atSGDMJ1gPjajCx3p&s');
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
  		}
  	</style>
</head>
<body>
	<div class="container-fluid sticky-top col-md-12 col-sm-12" style="padding-top: 5px; background-color: #8a8fbf;" class="Header">
		<div class="row">
			<div class="col-xl-2 container" style="padding-top: 10px;">
				<!--Logo Part-->
					<img class="img-fluid" src="https://logos.textgiraffe.com/logos/logo-name/Sabin-designstyle-candy-m.png" alt="SABIN" width="70%" height="30px">
			</div>
			<div class="col-xl-7 container-fluid">
				<!--Menu Part-->
				<nav class="navbar navbar-expand-md">
				<div class="collapse navbar-collapse " id="collapsibleNavbar">
				    <ul class="navbar-nav" style="font-family: 'Aclonica';">
					    <li class="nav-item">
					    	<a class="nav-link" href="#"><h6><u>About</u></h6></a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#"><h6><u>Aim</u></h6></a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#"><h6><u>Gallery</u></h6></a>
					    </li>    
				    </ul>
				</div>
				</nav>
			</div>
			<div class="col-xl-3">
				<!--Search/Social Icon-->
						<nav class="navbar navbar-expand-sm">
						<div class="collapse navbar-collapse" id="collapsibleNavbar">
						    <ul class="navbar-nav">
							    <li class="nav-item">
							    	<span class="rounded-circle">
							    	<a class="nav-link" href="https://www.facebook.com/" target="_blank">
							    		<img src="https://image.flaticon.com/icons/png/512/1384/1384005.png" class="img-fluid" style="height:20px;width:20px;">
							    	</a>
							    	</span>
							    </li>
							    <li class="nav-item">
							    	<span class="rounded-circle">
							    	<a class="nav-link" href="https://www.instagram.com/" target="_blank">
							    		<img src="https://image.flaticon.com/icons/png/512/1384/1384015.png" class="img-fluid" style="height:20px;width:20px;">
							    	</a>
							    	</span>
							    </li>
							    <li class="nav-item">
							    	<span class="rounded-circle">
							    	<a class="nav-link" href="https://www.youtube.com/" target="_blank">
							    		<img src="https://image.flaticon.com/icons/png/512/1384/1384012.png" class="img-fluid" style="height:20px;width:20px;">
							    	</a>
							    	</span>
							    </li>    
						    </ul>
						</div>
				<!-- Search Bar -->
						<div class="collapse navbar-collapse" id="collapsibleNavbar">
							<form class="form-inline form-control-sm">
							<input type="Search" class=" input-sm" placeholder ="Search Here" style="width:100%;">
							</form>
						</div>
						</nav>
			</div>
		</div>
	</div>
		<!--End of Header Section
			And
			Start of 2nd Section-->
	<div class="container-fluid"  style="padding-top: 15px;">
		<div class="row">
			<div class="col-xl-8">
				<!--Title/Welcome-->
				<img src="https://www.nepalvisit2020.com/wp-content/uploads/2017/11/2020.jpg" class="img-fluid img-thumbnail">
				<a href="https://www.youtube.com/channel/UClLZ2KIEW9s7HL5l6fqjMBA" target="_blank" >
					<input type="button" class="btn-info input-group-sm" value="Learn More >>>" target="_blank" style="font-size: 12px; background-size: cover;">
				</a>
			</div>

			<div class="col-xl-1">
				<!--Blank-->
			</div>
			
			<div class="col-xl-3" style="padding-top: 15px; background-color: #afafb3;">
				<!--Login Form-->
						<?php include('userlogin.php'); ?>
				<!--Registration Form-->	<hr>
					  	<?php include('userregister.php'); ?>
				<!--Add Blog Part--> <hr>
			</div>
		</div>
	</div>
		<hr>
		<!--End Of Second Section
			and 
			Start Of Third Section-->

	<!-- Recent Blogs -->	
	<?php include('bloginpage.php'); ?>	
		<br>
		<!-- Top Blogs -->
		<hr>
	<div class="container-fluid col-lg-12">
		<h3><u><b>Top Blogs</b></u></h3>
		<div class="card-deck">
		    <div class="card">
		      <div class="card-body">
		          <img class="card-img-top" src="https://www.seoclerk.com/pics/653973-1pMc8u1548606687.jpg" alt="Card image">
		          <div class="card-body">
		            <h4 class="card-title">1st </h4>
		            <p class="card-text">Blog 1</p>
		            <a href="#" class="btn btn-primary">See More</a>
		          </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-body">      
		          <img class="card-img-top" src="https://www.seoclerk.com/pics/653973-1pMc8u1548606687.jpg" alt="Card image">
		          <div class="card-body">
		            <h4 class="card-title">2nd</h4>
		            <p class="card-text">Blog 2</p>
		            <a href="#" class="btn btn-primary">See More</a>
		          </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-body">
		          <img class="card-img-top" src="https://www.seoclerk.com/pics/653973-1pMc8u1548606687.jpg" alt="Card image">
		          <div class="card-body">
		            <h4 class="card-title">3rd</h4>
		            <p class="card-text">Blog 3</p>
		            <a href="#" class="btn btn-primary">See More</a>
		          </div>
		      </div>
		    </div>
		    <div class="card">
		      <div class="card-body">
		           <img class="card-img-top" src="https://www.seoclerk.com/pics/653973-1pMc8u1548606687.jpg" alt="Card image">
		           <div class="card-body">
		             <h4 class="card-title">4th</h4>
		             <p class="card-text">Blog 4</p>
		             <a href="#" class="btn btn-primary">See More</a>
		           </div> 
		      </div>
		    </div>  
		</div>
				<br>
		<p align="right">
			<button class="btn btn-secondary btn-group-sm">See More Blogs</button>
		</p>
	</div>
		<hr>
		<!--End Of Fourth Section
			and
			Start Of Fifth Section-->
	<div class="container-fluid col-lg-12">	
		<div class="row">
			<div class="col-xl-3">
				<!--Contact Us-->
				<p style="color:white;">
					<u><b>Contact Us:</b></u><br>
					Sabin Rimal<br>
					9804975875, 9862761490<br>	
					Damak-5, New-AMDA Road<br>
					Province-1, Jhapa<br> 
					Nepal.<br>
				</p>
			</div>
			<div class="col-xl-3">
				<!--Blank-->
				Links
			</div>
			<div class="col-xl-3">
				<!--Connect With Us-->
				<P style="color: white;text-align: center;">
					<u><b>Connect With Us:</b></u><br>
					<center>
					<a href="#blank">Facebook.com/sabin</a><br>
					<a href="#blank">Instagram.com/sabin</a><br>
					<a href="#blank">Youtube.com/sabin</a><br>
					<a href="#blank">Twiter.com/sabin</a><br>
					<a href="#blank">WhatsApp</a><br>
					<a href="#blank">Viber</a>
					</center>
				</P>
			</div>
			<div class="col-xl-3">
				<!--Blank-->
				Comments
			</div>
		</div>
	</div>
		<hr>
	<!--End Of Fifth Section
			and
			Start Of Last/Footer Section-->
	<div class="container-fluid" style="margin-bottom:10px">
		<center>
		<div class="row">
			<div class="col-xl-1">
				More
			</div>
			<div class="col-xl-10">
				<h6>Join Us</h6>
				<form>
					<input type="email" class="form-control-sm" name="email" placeholder="Your Mail ID" id="email">
					<input type="text" class="form-control-sm" name="fullname" placeholder="Full Name" id="fullname">
					<a href="#.php">	<input type="submit" name="submit" id="submit" class="form-control-sm" value="JOIN">	</a>
						<br>
						Rate Us: <input type="range" name="points" min="0" max="10">
								<input type="submit">
				</form>
			</div>
			<div class="col-xl-1">
						<!--BLANK-->
			</div>
		</div>
		</center>
	</div>
	<div class="container-fluid" style="padding-bottom: 3px;">
		<div class="row">
			<div class="col-xl-12">
				<img src="http://cdn.shopify.com/s/files/1/1787/8943/products/ae7d93b4d28d439631850bb6248db8c3_600x.png?v=1535943790.png" onclick="topFunction()" id="myBtn" title="Go to top" height="30px" width="30px" align="right">
							<script>
								//Get the button
							var mybutton = document.getElementById("myBtn");
								// When the user scrolls down 20px from the top of the document, show the button
							window.onscroll = function() {scrollFunction()};
							function scrollFunction() 
							{
							  	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
							  	{
							    mybutton.style.display = "block";
							 	} 
							 	else {
							   	mybutton.style.display = "none";
							  	}
							}
								// When the user clicks on the button, scroll to the top of the document
							function topFunction() 
							{
						  		document.body.scrollTop = 0;
						 		document.documentElement.scrollTop = 0;
							}
						</script>
			</div>
		</div>
	</div>

</body>
</html>