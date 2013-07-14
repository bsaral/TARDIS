<?php
	 
	session_start();
	
	include("_header2.php");
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>
