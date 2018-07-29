<?php
	if(isset($_SESSION["id"]))
	echo $_SESSION["id"];
	else
	session_start();
	include "connect.php";
	$f_name=$_POST['f_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$check_exists="SELECT count(*) email FROM users WHERE email='$email'";
	$check_count=mysqli_query($con,$check_exists);
	$plis=mysqli_fetch_array($check_count,MYSQLI_NUM);
	if ($plis[0]!=0)
	{	
		echo "User already exists";
		header("Location:../navigation/sign_up.php");
	}
	else
	{
	$insert_val="INSERT INTO users(name,email,password,contact,address) VALUES ('$f_name','$email','$password','$phone','$address')";
	$submit_details=mysqli_query($con,$insert_val) or die(mysqli_error($con));
	header("Location:../navigation/login.php");
	}
	
?>
	<!DOCTYPE html>
<html>
	<head>
		<title>	
			Lifestyle Store
		</title>
		<link rel="shortcut icon" href="../resources/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/shop_style.css">
	</head>
<body>
	<nav>
			<div class="container-fluid navbar-inverse no-style">
				<div class="active">
					<a href="../index.php" class="navbar-brand">
						<span class="glyphicon glyphicon-lock"></span>
						Lifestyle Store
					</a>
				</div>
		</nav>
		
		<br>
		<br>

	<div class="container">
		<div class="jumbotron"  style="text-align:center">
			<h1>Your account has been registered.</h1> 
			<p>Please. <a href="../navigation/login.php" style="color:blue">Click here</A> to login. </p>
		</div>
	</div>


		<?php
			include "../includes/footer.php";
		?>

</body>
</html>
