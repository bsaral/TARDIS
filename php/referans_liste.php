<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}

	$sql = mysql_query ("SELECT * FROM referans ORDER BY id DESC ");
	$count = mysql_query("SELECT count(*) FROM referans");
	$num = 0;
?>

<div  style="position:absolute;top:100px;left:5in;width:9in;font-size:18px;">
<table class="table table-bordered table-striped table-hover">
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
    while($satir = mysql_fetch_array($sql))
	{
    echo "<tr >
    	<td>".$satir['id']. "</td>
		<td>".$satir['yer']. "</td>
		<td>".$satir['proje']. "</td>
		<td>".$satir['firma']. "</td>
		<td>".$satir['tarih']. "</td>
		<td><img src=".$satir['resim']." style='width:100px;height:100px;'></td>
	</tr>";
	}
	
	}
	else{
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