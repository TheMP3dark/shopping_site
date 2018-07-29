<?php
	session_start();
	include "connect.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$authenticate="SELECT COUNT(*) FROM users WHERE email='$email' AND password='$password'";
	$count_check=mysqli_query($con,$authenticate);
	$plis=mysqli_fetch_array($count_check,MYSQLI_NUM);
	if($plis[0]>0)
	{
		$_SESSION["id"]=$email;
		header("Location:../navigation/index.php");
	}
	else
	{
		header("Location:../navigation/login.php");
	}
	
?>