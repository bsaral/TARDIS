<?php
	include("_header.php"); 
	session_start();
	
	
	if (!isset($_SESSION['name']))
		{
			header('Location: index.php');
		}
?>
<!DOCTYPE html>
<meta CHARSEt=UTF-8>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />  
<title>Asilsan</title>

<div class="navbar  navbar-fixed-top">
	<div class="navbar-inner">
   	<div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p class="brand" style = "position:absolute;left:1.6in;">ASİLSAN YÖNETİM PANELİ</p>
          <div class="nav-collapse collapse">
				<ul class="nav pull-right">
				<li><img  src="../images/admin1.png" style="position:relative;right:90px;"/></li>
     				<li><a href="#" style="color:white;position:relative;right:90px;top:5px;" ><?php echo $_SESSION['name']; ?></a> </li>
       			<li><a href="logout.php" style="position:relative;right:80px;top:3.5px;" >Çıkış</a></li>
  			 </ul>
			</div>
        </div>
      </div>
    </div>
    
<footer class="footer">
<div class="navbar ">
<div class="navbar-fixed-bottom">
	<div class="navbar-inner">
        <div class="container">
           <ul class="nav pull-right" >
           <div style = "position:absolute;top:10px;right:1.5in;width:4.5in;"><p style="color:white;">©2013 -<a href="http://www.linkedin.com/pub/bet%C3%BCl-saral/36/837/767" style="color:white;"> Betül SARAL </a></div>
          </ul>
          
        </div>
      </div>
    </div>
  </div>    
</footer>





