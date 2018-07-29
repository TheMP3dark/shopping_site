<?php
	include "../php/connect.php";
	session_start();
	if(!isset($_SESSION["id"]))
	{
	header("Location:../navigation/sign_up.php");
	}
	else
	{
	echo $_SESSION["id"];
	$id=$_GET['item_id'];
	$get_item="SELECT name,price from items where id='$id'";
	$itm=mysqli_query($con,$get_item);
	$itm_details=mysqli_fetch_array($itm,MYSQLI_ASSOC);
	$_SESSION["itm_name"]=$itm_details['name'];
	$_SESSION["itm_price"]=$itm_details['price'];
	echo $_SESSION['itm_name'].$_SESSION['itm_price'];
	header("Location:../navigation/cart.php");
	}
	
?>