<?php
include ("./pengaturan/conn.php");
$query1 = "select * from tbl_hadiah order by Id limit 1";
//$hasil1 = mysql_query($query1, $koneksi);
$hasil1 = $mysqli->query($query1);
//$baris1 = mysql_fetch_row($hasil1);
$baris1 = mysqli_fetch_row($hasil1);
$Id1 = $baris1[0];
$Hadiah1 = $baris1[1];
print_r($query1);
?>