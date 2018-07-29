<?php
	session_start();
	$_SESSION["id"]=array();
	session_destroy();
	header("Location:../navigation/index.php");
?>