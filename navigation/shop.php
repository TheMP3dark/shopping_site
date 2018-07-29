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
			Lifestyle Store | Store
		</title>
		<link rel="shortcut icon" href="../resources/favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/shop_style.css">
	</head>
<body>
	<?php
		include "../includes/header.php";
	?>
		
		<br>
		<br>
		<br>
		<br>
		
			<div class="container">
		<div class="jumbotron">
		<h1>Welcome to the Lifestyle Store!</h1>
		<p>We have the best watches, shirts and cameras for you. No need to hunt around we have all the things you need in one place.</p>
		</div>
	</div>
		
	<div class="container">
		
				<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Canon EOS</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="1">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div>
			
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Nikon DSLR</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="2">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div>
			
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Sony DSLR</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value=3">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div>
			
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Olympus DSLR</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="4">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div>
			
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Titan Model #301</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="5">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div>
			
				<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Titan Model #201</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="6">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	

				<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>HMT Milan</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="7">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Faber Luba #11</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="8">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>H&W</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="9">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Luis Phil</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="10">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>John Zok</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="11">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
							<div class="col-lg-4">
					<div class="thumbnail black-bg">
					<a href="#" class="back">
						<img src="../resources/prod_img.png" alt="product_image" style="width:100%;">	
						<div class="cat_content" style="text-align:center">
							<h3>Jhalsnai #301</h3>
							<h5>Product Description.</h5>
							<form method="get" action="../php/cart_script.php">
							<button type="submit" class="btn btn-primary" name="item_id" value="12">Add to Cart</button>
							</form>
						</div>
						</a>
					</div>
			</div> 	
				
	</div>

		<?php
			include "../includes/footer.php";
		?>

</body>
</html>
