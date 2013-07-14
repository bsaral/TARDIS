<?php

	include("_header.php");
	session_start();

	

	
	if(isset($_SESSION['name']))
		{
			header('Location: success.php');
		}
	
?>


    
	<div class = "container">
	<div class = "span6">	


	<div class = "hero-unit" style ="position: relative;left: 2.5in;top:1.2in;height: 3in" >
	<form action="login.php"  method="post">
	<h3 style ="position: relative;left: 1.2in;top:-60px"> GİRİŞ YAP </h3><br>
	<div style ="position: relative;top: -0.5in;">
		<div class="control-group ">

		  <input type="text" name="name" placeholder="KULLANICI ADI" style ="width:3.2in;height:30px;"/><br/><br/>
		  <input type="password" name="password" placeholder="PAROLA" style ="width:3.2in;height:30px;"/><br/><br/>

		</div>
		<br/><br>

		<input type="submit" value="GÖNDER" class = "btn  btn-primary" style ="width:2in;height:50px;position: relative;left: -0.4in;top:0px;"/>
		<input type="reset" name="reset" class = "btn  btn-danger"  style ="width:2in;height:50px;position: relative;left: 1.9in;top:-50px" value="RESET">
	</div>
	</form>
	</div>
	</div>
</div>    
    
    
    
    
    
