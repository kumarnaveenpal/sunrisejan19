<?php require("./classes/init.php");
if( isset($_POST['register']) ){
	$calldata->uemail = trim($_POST['email']);
	$calldata->uname = trim($_POST['uname']);
	$calldata->upassword = trim($_POST['pswd']);
	$calldata->ucontact = trim($_POST['contact']);
	$calldata->uage = trim($_POST['age']);
	$calldata->ucity = trim($_POST['city']);
	$calldata->ugender = trim($_POST['gender']);
	echo $calldata->create_user();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Register</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="uname">Name:</label>
				<input type="text" class="form-control" required="required" id="uname" name="uname">
			</div>
			<div class="form-group">
				<label for="contact">Contact:</label>
				<input type="text" class="form-control" required="required" id="contact" name="contact">
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="text" class="form-control" required="required" id="age" name="age">
			</div>
			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" class="form-control" required="required" id="city" name="city">
			</div>
			<div class="form-group">
				<label for="gender`">Gender:</label>
				<select class="form-control" id="gender" required="required" name="gender">
					<option>-Select-</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" required="required" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" required="required" id="pwd" name="pswd">
			</div>
	  	<button type="submit" class="btn btn-primary" value="register" name="register">Submit</button>
		</form>
		<br/><hr/>
		
		<h2>Login</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="pswd">
			</div>
		  <button type="submit" class="btn btn-primary" value="login">Submit</button>
		</form>

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>