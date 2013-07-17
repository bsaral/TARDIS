<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}

	$sql = mysql_query ("SELECT * FROM news ORDER BY id DESC LIMIT 0,4 ");
	$count = mysql_query("SELECT count(*) FROM news");

	$sql2 = mysql_query ("SELECT * FROM referans ORDER BY id DESC LIMIT 0,4 ");
	$count2 = mysql_query("SELECT count(*) FROM referans");

	$sql3 = mysql_query ("SELECT * FROM proje ORDER BY id DESC LIMIT 0,4 ");
	$count3 = mysql_query("SELECT count(*) FROM proje");

	$num = 0;
?>



<div  style="position:absolute;top:100px;left:5in;width:9in;font-size:18px;">

	<!-- HABERLER TABLOSU -->

<table class="table table-bordered table-striped table-hover">
	
	<thead>
		<B ><tr > <th > HABERLER TABLOSU</th></B>
		
		
		
	    </tr>
	<tr class="error">
		<th > ID </th>
		<th > HABER BAŞLIĞI </th>
		<th> HABER </th>
		<th> RESİM </th>
	</tr>
</thead>
	<?php 
	if($count != 0)
	{
    while($satir = mysql_fetch_array($sql))
	{
    echo "<tr >
    	<td >".$satir['id']. "</td>
		<td >".$satir['title']. "</td>
		<td colspan='4'>".$satir['haber']. "</td>
		<td ><img src=".$satir['image']." style='width:100px;height:60px;'></td>
	</tr>";
	}
	
	}else{
		echo "
			<div class = 'span7'>	
		
			<div class='alert alert-error' style = 'position:relative;top:-100px;left:2.7in;font-size:20px;'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Haberler Tablosunda Hiç Kayıt Bulunmamaktadır !
			</div></div>";
	}
	?>
</table><br><br><br>

			<!-- REFERANS TABLOSU -->

<table class="table table-bordered table-striped table-hover">
	
	<thead>
	<B ><tr > <th > REFERANSLAR TABLOSU</th></tr></B>
	<tr class="error">
		<th> ID </th>
		<th> YER </th>
		<th> PROJE </th>
		<th> FİRMA </th>
		<th> TESLİM </th>
		<th> RESİM </th>
	</tr>
	<?php 
	if($count != 0)
	{
    while($satir = mysql_fetch_array($sql2))
	{
    echo "<tr >
    	<td>".$satir['id']. "</td>
		<td>".$satir['yer']. "</td>
		<td>".$satir['proje']. "</td>
		<td>".$satir['firma']. "</td>
		<td>".$satir['tarih']. "</td>
		<td><img src=".$satir['resim']." style='width:100px;height:60px;'></td>
	</tr>";
	}
	
	}
	else{
		echo "
			<div class = 'span7'>	
		
			<div class='alert alert-error' style = 'position:relative;top:-100px;left:2.7in;font-size:20px;'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Referans Tablosunda Hiç Kayıt Bulunmamaktadır !
			</div></div>";
	}
	
	?>
</table><br><br><br>

		<!-- PROJELER TABLOSU -->

<table class="table table-bordered table-striped table-hover">
	
	<thead>
	<B ><tr > <th > PROJELER TABLOSU</th></tr></B>
	<tr class="error">
		<th> ID </th>
		<th> PROJE İSMİ </th>
		<th> PROJE AÇIKLAMASI </th>
		<th> PROJE RESMİ </th>
	</tr>
	<?php 
	if($count != 0)
	{
    while($satir = mysql_fetch_array($sql3))
	{
    echo "<tr >
		<td>".$satir['id']. "</td>
		<td>".$satir['p_name']. "</td>
		<td>".$satir['content']. "</td>
		<td><img src=".$satir['resim']." style='width:100px;height:60px;'></td>
	</tr>";
	}
	
	}else{
		echo "
			<div class = 'span7'>	
		
			<div class='alert alert-error' style = 'position:relative;top:-100px;left:2.7in;font-size:20px;'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Hiç Kayıt Bulunmamaktadır !
			</div></div>";
	}
	?>
</table>

<br><br><br>
</div>