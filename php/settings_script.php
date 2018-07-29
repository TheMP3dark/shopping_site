<?php
	if(isset($_SESSION["id"]))
	$email=$_SESSION["id"];
	else
	session_start();
	include "../php/connect.php";
	$email=$_SESSION["id"];
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$get_pass="SELECT password FROM users WHERE '$email'=email";
	$verify_pass=mysqli_query($con,$get_pass);
	$password=mysqli_fetch_array($verify_pass,MYSQLI_ASSOC);
	$key=$password['password'];
	if($old_password=$key)
	{
		$change_pass="UPDATE users SET password='$new_password' WHERE email='$email'";
		$complete_change=mysqli_query($con,$change_pass);
		header("Location:../navigation/index.php");
	}
	else
		header("Location:settings.php");
?>