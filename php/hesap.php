<?php
	 
	session_start();
	include("_header2.php"); 

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>

<div class="hero-unit" style="position:absolute;top:100px;left:6in;width:auto;">
<form action="guncelle.php"  method="post">
	<h3 style ="position: relative;left: 1in;top:-60px"> PAROLA DEĞİŞTiR </h3><br>
	<div style ="position: relative;top: -0.5in;">
		<div class="control-group ">

		  <input type="text" name="old" placeholder="ESKİ PAROLA" style ="width:3.5in;height:30px;"/><br/><br/>
		  <input type="password" name="new" placeholder="YENİ PAROLA" style ="width:3.5in;height:30px;"/><br/><br/>
		  <input type="password" name="newa" placeholder="YENİ PAROLA(*TEKRAR)" style ="width:3.5in;height:30px;"/><br/><br/>

		</div>
		<br/><br>

		<input type="submit" value="DEĞİŞTİR" class = "btn  btn-primary" style ="width:2in;height:50px;position:absolute;left: 0.8in;top:2.5in;"/>
		
	</div>
	</form>

</div>