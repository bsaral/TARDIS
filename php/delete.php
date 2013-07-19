<?php
	 
	session_start();
	include("config.php");

	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql_sil=mysql_query("delete from iletisim where id='$id'");
		if($sql_sil){
			header('Location: gelen_kutusu.php');
		}
	}
		
?>