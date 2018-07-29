<!DOCTYPE HTML>

<?php
	if(isset($_SESSION["id"]))
	echo $_SESSION["id"];
	else
	session_start();
?>

<html>
	<head>
		<title>
			Lifestyle Store | Home	
		</title>	
			<link rel="shortcut icon" href="resources/favicon.ico">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="../css/index_style.css">
		</title>	
	</head>
	<body>
		<?php
		include "../includes/header.php";
		?>
		
		<div id="header" class="container-fluid header_properties img-responsive"  style="padding:2%" >
			<br>
			<div class="container-fluid" style="padding:5%; background:rgba(0,0,0,0.7); color:white; width:35%;">
				<center>
					<h1 style="padding:1%">
						We sell lifestyle.
					</h1>
					<h4 style="padding:1%">
						Flat 40% off on all products !
					</h4>					
					<a href="../navigation/shop.php">
						<button class="btn btn-danger" style="margin:3%">Shop Now</button>
					</a>
				</center>
			</div>
			<br>
		</div>
				
		<br>
		<br>
		
	<div class="container">
		<a href="#" class="cat_text">
			
				<div class="col-lg-4">
					
						<div class="thumbnail back">
							<img src="../resources/camera.jpg" alt="camera_image" style="width:100%;">
							
								<div style="text-align:center">
									<h2>Cameras</h2>
									<h4>Best Cameras from around the world.</h4>
								</div>
					
				</div>
		
		</div>
	
		</a>
		<a href="#" class="cat_text">
		<div class="col-lg-4">
			<div class=" thumbnail back">
				<img src="../resources/shirt.jpg" alt="shirt_image"style="width:100%;">
				<div style="text-align:center">
					<h2>Shirts</h2>
					<h4>All styles available.</h4>
				</div>
			</div>
		</div>
		</a>
		<a href="#" class="cat_text">
		<div class="col-lg-4">
			<div class="thumbnail back">
				<img src="../resources/watch.jpg" alt="watch_image" style="width:100%;">
				<div class="cat_content" style="text-align:center">
					<h2>Watches</h2>
					<h4>Prestigiuos collection of watches.</h4>
				</div>
			</div>
		</div>
		</a>
	</div>

<br>
<br>

	<?php
		include "../includes/footer.php"
	?>
	
	</body>
</html>