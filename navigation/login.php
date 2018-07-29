<!DOCTYPE html>
<html>
	<head>
		<title>	
			Lifestyle Store | Log In
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
				Log In
			</h1>
			<div class="form-group"  style="width:50%;">
				<form action="../php/login_script.php" method="post">
					<input id="email" name="email" type="email" class="form-control" placeholder="Email" style="width:50%;  margin:10px;">
					<input id="password" name="password" type="password" class="form-control" placeholder="Password" style="width:50%;  margin:10px;">
					<input type="submit" class="form-control btn-primary" style="width:15%;  margin:10px" value="Log In" >
				</form>
			</div>
		</center>

		<?php
			include "../includes/footer_bottom.php";
		?>

</body>
</html>
