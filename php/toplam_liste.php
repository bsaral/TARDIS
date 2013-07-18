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

<table class="table table-bordered table-striped table-hover"  cellpadding="3">
	
	<thead>
	<B ><tr > <th colspan="5" style ="text-align:center;background-color:#f2dede"> HABERLER TABLOSU</th></tr></B>
		
	<tr class="error">
		<th width="100" style ="background-color:#f3edd2" > ID </th>
		<th style ="background-color:#f3edd2"> HABER BAŞLIĞI </th>
		<th style ="background-color:#f3edd2"> HABER </th>
		<th style ="background-color:#f3edd2"> RESİM </th>
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
		<td >".$satir['haber']. "</td>
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
	<B ><tr > <th colspan="7" style ="text-align:center;background-color:#f2dede"> REFERANSLAR TABLOSU</th></tr></B>
	<tr class="error">
		<th width="100" style ="background-color:#f3edd2"> ID </th>
		<th style ="background-color:#f3edd2"> YER </th>
		<th style ="background-color:#f3edd2"> PROJE </th>
		<th style ="background-color:#f3edd2"> FİRMA </th>
		<th style ="background-color:#f3edd2"> TESLİM </th>
		<th style ="background-color:#f3edd2"> RESİM </th>
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
	<B ><tr > <th colspan="5" style ="text-align:center;background-color:#f2dede"> PROJELER TABLOSU</th></tr></B>
	<tr class="error">
		<th width="100" style ="background-color:#f3edd2"> ID </th>
		<th style ="background-color:#f3edd2"> PROJE İSMİ </th>
		<th style ="background-color:#f3edd2"> PROJE AÇIKLAMASI </th>
		<th style ="background-color:#f3edd2"> PROJE RESMİ </th>
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