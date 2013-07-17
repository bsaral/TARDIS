<?php
	 
	session_start();
	include("_header2.php");
	include("config.php");

	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
	$sql = mysql_query ("SELECT * FROM news ORDER BY id DESC ");
	$count = mysql_query("SELECT count(*) FROM news");
	$num = 0;
?>

<div  style="position:absolute;top:100px;left:5in;width:9in;font-size:18px;">
<table class="table table-bordered table-striped table-hover">
	<tr class="error">
		<th> Haber Başlığı </th>
		<th> Haber </th>
		<th> Resim </th>
	</tr>
	<?php 
	if($count != 0)
	{
    while($satir = mysql_fetch_array($sql))
	{
    echo "<tr >
		<td>".$satir['title']. "</td>
		<td>".$satir['haber']. "</td>
		<td><img src=".$satir['image']." style='width:100px;height:100px;'></td>
	</tr>";
	}
	
	}else{
		echo "Hic kayit yok!";
	}
	?>
</table>
<br><br><br>
</div>