<?php 

include("_header.php"); 

?>
    
    
<div class = "container">
	<div class = "span6">	
	
		<div class="alert alert-error" style = "position:relative;top:100px;left:210px;font-size:20px;">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<strong>Dikkat !</strong><br><br> Kullanıcı adınız veya parolanız yanlıştır.
		</div>
	

	<div class = "hero-unit" style ="position: relative;left: 2.2in;top:1.2in;height: 3in" >
	<form action="login.php"  method="post">
	<h3 style ="position: relative;left: 1.2in;top:-60px"> GİRİŞ YAP </h3><br>
	<div style ="position: relative;top: -0.5in;">
		<div class="control-group ">

		  <input type="text" name="name" placeholder="KULLANICI AD" style ="width:3.2in;"/><br/><br/>
		  <input type="password" name="password" placeholder="PAROLA" style ="width:3.2in;"/><br/><br/>

		</div>
		<br/><br>

		<input type="submit" value="GÖNDER" class = "btn  btn-primary" style ="width:2in;position: relative;left: -0.4in;top:0px;"/>
		<input type="reset" name="reset" class = "btn  btn-danger"  style ="width:2in;position: relative;left: 1.9in;top:-38px" value="RESET">
	</div>
	</form>
	</div>
	</div>
</div>    
    
    
    
    
    
