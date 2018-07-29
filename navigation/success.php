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
				<div>
					<ul class="nav navbar-nav navbar-right"  style="padding-right:1%;">
						<li>
							<a href="cart.php">
								<span class="glyphicon glyphicon-shopping-cart"></span>
									Cart
							</a>
						</li>
						<li>
							<a href="settings.php">
								<span class="glyphicon glyphicon-user"></span>
								Settings
							</a>
						</li>
						<li>
							<a href="../index.php">
								<span class="glyphicon glyphicon-log-out"></span>
								Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<br>
		<br>

	<div class="container">
		<div class="jumbotron"  style="text-align:center">
			<h1>Your order is confirmed.</h1> 
			<p>Thank you for shopping with us. <a href="../navigation/shop.php" style="color:blue">Click here</a> to purchase any other item. </p>
		</div>
	</div>


		<?php
			include "../includes/footer_bottom.php";
		?>

</body>
</html>
