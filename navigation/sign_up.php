<?php
	if(isset($_SESSION["id"]))
	echo $_SESSION["id"];
	else
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>	
			Lifestyle Store | Sign Up
		</title>
		<link rel="shortcut icon" href="../resources/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>
	<?php
		include "../includes/header.php";
		?>
		<center>
			<h1>
				Sign Up
			</h1>
			<form class="form-group"  style="width:50%;" action="../php/signup_script.php" method="post">
					<input id="f_name" name="f_name" class="form-control" placeholder="First Name" style="width:50%;  margin:10px;" pattern="[A-Za-z]+" required="true">
					<input id="l_name" name="l_name" class="form-control" placeholder="Last Name" style="width:50%;  margin:10px;" pattern="[A-Za-z]+" required="true">
					<input id="email" name="email" type="email" class="form-control" placeholder="Email" style="width:50%;  margin:10px;" required="true">
					<input id="password" name="password" type="password" class="form-control" placeholder="Password" style="width:50%;  margin:10px;" required="true">
					<input id="password_repeat" name="password_repeat" type="password" class="form-control" placeholder="Repeat Password" style="width:50%;  margin:10px;" required="true">
					<input id="phone" name="phone" type="tel" class="form-control" placeholder="Phone Number" style="width:50%;  margin:10px;" pattern="[0-9]{10}" required="true">
					<textarea rows="4" cols="5" id="address" name="address" class="form-control row-lg-4" placeholder="Address" style="width:50%;  margin:10px;" required="true"></textarea>
					<input type="submit" class="form-control btn-primary" style="width:15%;  margin:10px" value="Submit">
			</form>
		</center>
	
		<?php
			include "../includes/footer_bottom.php";
		?>
	
</body>
</html>
