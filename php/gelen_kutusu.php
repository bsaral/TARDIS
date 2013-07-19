<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}

	$sql = mysql_query ("SELECT * FROM iletisim ORDER BY id DESC ");
	$count = mysql_query("SELECT count(*) FROM iletisim");
	$num = 0;

?>
<form action="" method ="post">
<div  style="position:absolute;top:150px;left:4.5in;width:9in;font-size:18px;">
<table class="table table-bordered table-striped table-hover">
	<tr class="error">
		<th style="background-color:#f2dede"> ID </th>
		<th style="background-color:#f2dede"> AD-SOYAD </th>
		<th style="background-color:#f2dede"> E-POSTA </th>
		<th style="background-color:#f2dede"> TELEFON </th>
		<th style="background-color:#f2dede"> KONU </th>
		<th style="background-color:#f2dede"> MESAJ </th>
		<th style="background-color:#f2dede"> </th>
		<th style="background-color:#f2dede"> </th>
		<th style="background-color:#f2dede"> </th>
	</tr>
	<?php 
		if($count != 0)
		{
		    while($satir = mysql_fetch_array($sql))
			{
			    echo "<tr >
					<td>".$satir['id']. "</td>
					<td>".$satir['isim']. "</td>
					<td>".$satir['mail']. "</td>
					<td>".$satir['telefon']. "</td>
					<td>".$satir['konu']. "</td>
					<td>".$satir['mesaj']. "</td>
					<td><a href='delete.php?id=".$satir['id']."' class='btn btn-danger'>SİL</a></td>
					<td><a href='oku.php?id=".$satir['id']."' class='btn btn-info'>OKU</a></td>
					<td><a href='isaretle.php?id=".$satir['id']."' class='btn btn-success'>İŞARETLE</a></td>
				</tr>";
			}
		
		}
		else{
			echo "
				<div class = 'span7'>	
			
				<div class='alert alert-error' style = 'position:relative;top:100px;left:2.7in;font-size:20px;'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Dikkat !   </strong>&nbsp;&nbsp;&nbsp;Hiç Kayıt Bulunmamaktadır !
				</div></div>";
		}
	?>
</table>
<br><br><br>
</div>
</form>

<?php
if (isset($_POST['sil'])){
	$ID = $_GET['id'];
	
	
		echo "
				<h1 style='font-size:100px'>".$ID."</h1>"; 
	
}

?>