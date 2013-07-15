<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>

<div class="hero-unit" style="position:absolute;top:100px;left:4.5in;width:auto;">
<form action=''  method="post" enctype="multipart/form-data">
	<h3 style ="position: relative;left: 3in;top:-60px;font-weight:bold;"> HABER EKLE </h3><br>
	<div style ="position: relative;top: -0.5in;">
		<div class="control-group ">
		  <b>BAŞLIK<b><br><br>
		  <input type="text" name="title" placeholder="BAŞLIK" style ="width:3.2in;height:30px;"/><br/><br/>
		  <b >HABER<b><br><br>
		  <textarea  name="haber" class="ckeditor"></textarea><br/><br/>
		  <b style="position: absolute;left: 5in;top:0px"/>RESİM<b>
		  <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
		  <input type="file" name="resim" id="resim" style="position: absolute;left: 0in;top:60px"/>
		  

		</div>
		<br/><br>

		<input type="submit" name ="ekle" value="EKLE" class = "btn  btn-primary" style ="width:2in;height:50px;position:absolute;right: -0.3in;top:6in;"/><br/><br/>
		
	</div>
	</form>

</div>

<?php
if(isset($_POST['ekle'])){
	$title = $_POST['title'];
	$haber = $_POST['haber'];
	$sql1 = mysql_query("INSERT into news(title,haber) values ('$title','simple_format($haber')");
	if(is_uploaded_file($_FILES['resim']['name'])){
 
	$maxsize=$_POST['MAX_FILE_SIZE'];		
	$size=$_FILES['resim']['size'];
 
	$imgdetails = getimagesize($_FILES['resim']['name']);
	$mime_type = $imgdetails['mime']; 
 
	
	if(($mime_type=='image/jpeg')||($mime_type=='image/gif') ||($mime_type=='image/png')){
	  
	 
	    $filename=$_FILES['resim']['name'];	
	    $imgData =addslashes (file_get_contents($_FILES['resim']['tmp_name']));
	    $sql="INSERT into news(name,image,type,size) values ('$filename','$imgData','".$mime_type."','".addslashes($imgdetails[3])."')";					
	    mysql_query($sql,$link) or die(mysql_error());
	  
	}else{
	  echo "
			<div class = 'span7'>	
	
			<div class='alert alert-success' style = 'position:relative;top:150px;left:6in;font-size:20px;'>
  				<button type='button' class='close' data-dismiss='alert'>&times;</button>
  				<strong>Dikkat !</strong><br><br> Sadece Resim Ekleyebilirsiniz2 !
			</div></div>";
	}
 
}
}

?>
