<?php   if (!isset($_SESSION)) session_start();
if (isset($_POST['userid']))
{
	include ("conn.php");
	$user=htmlentities((trim($_POST['userid'])));
	$password=htmlentities(($_POST['passwd']));
	
	$login=mysql_query("select * from admin where user='$user' and password='$password'",$koneksi);
	
	$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="index.php";
			</script><?php  
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$id=$row[0];
				$_SESSION['id'];
				$_SESSION['user'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['user'] = $row['user'];
			}
			echo "<script> document.location.href='admin.php?page=home'; </script>";
		}
}else{
	unset($_POST['userid']);
}
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<title>Login</title>
<body onLoad=document.postform.elements['userid'].focus();>
<style type="text/css">
#RollOver1 a
{
   display: block;
   position: absolute;
}
#RollOver1 a img
{
   position: absolute;
   z-index: 1;
   border-width: 0px;
}
#RollOver1 span
{
   display: block;
   height: 200px;
   width: 200px;
   position: absolute;
   z-index: 2;
}
#RollOver1 a .hover
{
   visibility: hidden;
}
#RollOver1 a:hover .hover
{
   visibility: visible;
}
#RollOver1 a:hover span
{
   visibility: hidden;
}

</style>
<div id="RollOver1" style="position:absolute;width:100px;height:100px;z-index:0">
<a href="../index.php">
<img class="hover" alt="" src="../images/home-hover.png" style="width:100px;height:100px;">
<span><img alt="" src="../images/home-active.png" style="width:100px;height:100px"></span>
</a>
</div>
<table width="19%" border="0" cellpadding="0" cellspacing="0" bordercolor="#64EA9C" align="center">
<tr> 
	<td width="4%" align="right"><img src="../images/kiri.jpg"></td>
	<td width="74%" bgcolor="#64EA9C" ><div align="center"><strong><font face="verdana" size="2" color="BLACK">LOGIN REGISTRASI DOOR PRIZE</font></strong></div></td>
	<td width="21%"><img src="../images/kanan.jpg"></td>
</tr>
<tr>
	<td background="../images/b-kiri.jpg">&nbsp;</td>
	<td>
	<table width="259" align="center">
		<tr><td width="251"><font face="verdana" size="2">&nbsp;
		</font>
		
		<form action="index.php" method="post" name="postform" id="postform">
		  <table width="251" height="101" border="0" align="center">
		  <tr valign="bottom">
			<td width="104" height="35"><font size="4" face="verdana">Pengguna</font></td>
			  <td width="137"><font size="4" face="verdana">
				<input type="text" name="userid" size="20" id="userid">
			  </font></td>
		  </tr>
		  
		  <tr valign="top">
			<td height="34"><font size="4" face="verdana">Sandi</font></td>
			  <td><font size="4" face="verdana">
				<input type="password" name="passwd" size="20" id="passwd">
			  </font></td>
		  </tr>
		  
		  <tr>
		  	<td>&nbsp;</td>
		  	<td><font size="4" face="verdana">
				<input type="submit" value="LOGIN" onClick="return cek()">
			  </font></td>
		  </tr>
		  </table>
		</form>
		
				
		</td></tr>
	</table>
	</td>
	<td background="../images/b-kanan.jpg">&nbsp;</td>
	<td width="1%"></td>
</tr>
<tr> 
	<td align="right"><img src="../images/kib.jpg"></td>
	<td bgcolor="#64EA9C" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
	<td><img src="../images/kab.jpg"></td>
</tr>
</table>
</body>
</html>