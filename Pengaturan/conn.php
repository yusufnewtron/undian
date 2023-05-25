<html>
<head>
</head>
<body>
<?php 
/*ini_set('display_errors',FALSE);
$host="localhost";
$user="doorprize";
$pass="doorprize123";
$db="doorprize";


$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$tanggal=date("d/m/Y");

if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php 
}*/

?>

</body>
</html>


<?php
$server = "sql208.epizy.com";
$username = "epiz_34273209";
$password = "8BI2qjUcJwZq";
$database = "epiz_34273209_arisan";

define("HOST", "sql208.epizy.com"); // Host database
define("USER", "epiz_34273209"); // Usernama database
define("PASSWORD", "8BI2qjUcJwZq"); // Password database
define("DATABASE", "epiz_34273209_arisan"); // Nama database


mysqli_connect($server,$username,$password,$database,false,65536) or die("Koneksi gagal");


$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($mysqli->connect_error){
	trigger_error('Koneksi ke database gagal: ' . $mysqli->connect_error, E_USER_ERROR);	
}
?>