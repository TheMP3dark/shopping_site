<?php
if(isset($_SESSION["id"]))
{
	include "id.php";
}

else
{
	include "no_id.php";
}
?>