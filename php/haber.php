<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>

<div class="hero-unit" style="position:absolute;top:100px;left:4.5in;width:auto;background-color:#f3edd2">
<form action=''  method="post" enctype="multipart/form-data">
	<h3 style ="position: relative;left: 3in;top:-60px;font-weight:bold;"> HABER EKLE </h3><br>
	<div style ="position: relative;top: -0.5in;">
		<div class="control-group ">
		  <b>BAŞLIK<b><br><br>
		  <input type="text" name="title" placeholder="BAŞLIK" style ="width:3.2in;height:30px;"/><br/><br/>
		  <b >HABER<b><br><br>
		  <textarea  name="haber" class="ckeditor"></textarea><br/><br/>
		  <b style="position: absolute;left: 5in;top:0px"/>RESİM<b>
		  
		  <input type="file" name="dosya" id="dosya"  style="position: absolute;left: 0in;top:60px"/>
		  

		</div>
		<br/><br>

		<input type="submit" name ="ekle" value="EKLE" class = "btn  btn-primary" style ="width:2in;height:50px;position:absolute;right: -0.3in;top:6in;"/><br/><br/>
		
	</div>
	</form>

</div>

<?php
if(isset($_POST['ekle'])){
	
	$dosyayolu = $_FILES['dosya']['tmp_name']; 
	$title = $_POST['title'];
	$haber = $_POST['haber'];
	$resim = "../img/upload/" . $_FILES['dosya']['name']; 

	if ($resim != ""){
		
		$copied = copy($_FILES['dosya']['tmp_name'], $resim);
	}
	
		
	if($title == "" || $haber == "" ){
		echo "
			<div class = 'span7'>	
		
			<div class='alert alert-error' style = 'position:relative;top:50px;left:1in;font-size:20px;'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Lütfen Alanları Boş Bırakmayınız !
			</div></div>";
	}
	
	else {
		$sorgu = mysql_query("insert into news(title,haber,image) values('$title','$haber','$resim')");
		if($sorgu) {

			header('Location: haber_liste.php');
		}
		
		
		 else{
			echo "
				<div class = 'span7'>	
			
				<div class='alert alert-error' style = 'position:relative;top:50px;left:5.5in;font-size:20px;'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Haber Kaydedilmedi !
				</div></div>";
				
				
				
		 }
	}
}

?>
