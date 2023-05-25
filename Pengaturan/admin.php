<?php include ("cek_session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Solutions 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091102

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registrasi Door Prize</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /></head>
<body>
	<div id="logo">
		<h1><a href="#">[REGISTRASI DOOR PRIZE]</a></h1>
		<p>&nbsp;</p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="logout.php" onclick="return confirm('Apakah Anda yakin?')">Logout</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		
		<div id="content">
		<?php include ("isi.php");?>
		</div>
		<!-- end #content -->
		
		<div id="sidebar">
		<?php include ("menu.php");?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright &copy; 2020 DoorPrize by GVP</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
