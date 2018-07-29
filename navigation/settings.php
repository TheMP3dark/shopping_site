<?php
	include "../php/connect.php";
	if(!isset($_SESSION["id"]))
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>	
			Lifestyle Store | Settings
		</title>
		<link rel="shortcut icon" href="../resources/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/shop_style.css">
	</head>
<body>
	<?php
		include "../includes/header.php"
		?>
		
		<br>
		<br>
		
		<div class="container">
			<center>
				<h1>Change Your Password</h1>
				<form class="form-group" style="width:50%;" action="../php/settings_script.php" method="post">
					<input id="old_password" name="old_password" type="password" class="form-control" placeholder="Old Password" style="width:50%;  margin:10px;" required>
					<input id="new_password" type="password" class="form-control" placeholder="New Password" style="width:50%;  margin:10px;" required>
					<input id="repeat_new_password" name="new_password" type="password" class="form-control" placeholder="Repeat New Password" style="width:50%;  margin:10px;" required>				
				<input type="submit" class="btn btn-primary" id="change_password" value="Change Password">
				</form>
			</center>
		</div>


		<?php
			include "../includes/footer_bottom.php";
		?>

</body>
</html>
