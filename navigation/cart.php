
<?php
	include "../php/connect.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>	
			Lifestyle Store | Cart
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
					<a href="../navigation/index.php" class="navbar-brand">
						<span class="glyphicon glyphicon-lock"></span>
						Lifestyle Store
					</a>
				</div>
				<div>
		</nav>
		
		<br>
		<br>
		
		<div class="container">
				<div>
					<table class="table table-striped">
						<tr><th>Item description</th><th>Price</th><th>Quantity</th></tr>
						<tr><td><?php echo $_SESSION["itm_name"];?></td><td><?php echo $_SESSION["itm_price"];?></td><td>1</td></tr>
					</table>
				</div>
		</div>


		<?php
			include "../includes/footer_bottom.php";
		?>
		
		<div>
			<center>
				<a href="success.php"><button class="btn btn-success" id="confirm">Confirm Order</button></a>
			</center>
		</div>

</body>
</html>
