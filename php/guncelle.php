<?php

session_start();
include("_header2.php");
include("config.php");

$name = mysql_real_escape_string($_SESSION['name']);
$new = mysql_real_escape_string($_POST['new']);
$newa =mysql_real_escape_string($_POST['newa']);
$old = mysql_real_escape_string($_POST['old']);
$result=mysql_query ("SELECT name FROM users WHERE name='$name'"); 

if(!$result){
	echo "<h1>hata var</h1>";
	}
	
else {
	$sql = mysql_query ("SELECT password FROM users WHERE name='$name'");
	$print = mysql_fetch_assoc($sql) ;
	
	if($old != $print['password']) {
		echo "
		<div class = 'span7'>	
	
		<div class='alert alert-error' style = 'position:relative;top:150px;left:6in;font-size:20px;'>
  			<button type='button' class='close' data-dismiss='alert'>&times;</button>
  			<strong>Dikkat !</strong><br><br> Eski Parola Yanlış Girildi !
		</div>
		<a href='hesap.php' style = 'position:relative;top:200px;left:7.7in;font-size:20px;' class = 'btn btn-large btn-primary'> TEKRAR DENE </a></div>";
		
		}
	
	else if($_POST['new']!=$_POST['newa']){
		echo "
		<div class = 'span7'>	
	
		<div class='alert alert-error' style = 'position:relative;top:150px;left:6in;font-size:20px;'>
  			<button type='button' class='close' data-dismiss='alert'>&times;</button>
  			<strong>Dikkat !</strong><br><br> Parola Eşleşme Hatası Var !
		</div>
		<a href='hesap.php' style = 'position:relative;top:200px;left:7.7in;font-size:20px;' class = 'btn btn-large btn-primary'> TEKRAR DENE </a></div>";
		}
		
	else{
		$sql=mysql_query("UPDATE users SET password='$new' where name='$name'") ; 
		if($sql) {
			echo "
			<div class = 'span7'>	
	
			<div class='alert alert-success' style = 'position:relative;top:150px;left:6in;font-size:20px;'>
  				<button type='button' class='close' data-dismiss='alert'>&times;</button>
  				<strong>Dikkat !</strong><br><br> Parolanız Başarıyla Güncellenmiştir !
			</div></div>";
		
		}
		}
}
