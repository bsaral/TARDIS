<?php
	$dhost = 'localhost'; 
	$uname = 'root';
	$pword = ''; 
	$dbase = 'asilsan'; 
	mysql_connect ($dhost,$uname,$pword) or die (mysql_error());
	mysql_select_db($dbase) or die (mysql_error());
?>