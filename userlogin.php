<form  class="container-fluid" action="loginaccess.php" method="POST">
	<h4><u>LogIn Here</u></h4>	
		<table class="table-responsive-* table-condensed">
			<col width="80px">
				<col width="auto">	
					<tr>	
					    <div class="form-group">
					      	<th><label for="username">Email:</label></th>
					      	<th><input type="email" class="form-control" name="username" placeholder="Enter email"></th>
					    </div>
					</tr>
					<tr>
						<div class="form-group">
						    <th><label for="pwd">Password:</label></th>
						    <th><input type="password" class="form-control" name="password" placeholder="Enter password"></th>
						</div>
					</tr>
					<tr>
						<div class="checkbox">
							<th></th>
						    <th><label><input type="checkbox">&nbsp Remember Me</label><th>
						</div>
						    <tr>
						    	<th></th>
						    	<th><button type="submit" class="btn-outline-primary" name="LogIn">LogIn</button></th>
						    </tr>
					</tr>
		</table>
</form>