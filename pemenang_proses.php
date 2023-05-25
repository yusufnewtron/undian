<?php
$Id1 = $_POST ["Id1"];
$Id2 = $_POST ["Id2"];
$Nomor = $_POST ["Nomor"];
$Nama = $_POST ["Nama"];
$Hadiah = $_POST ["Hadiah"];

if (empty($Id1) or empty($Id2)) die("<script type='text/javascript'>alert('Pastikan Data Terisi');history.go(-1);</script>");

include ("Pengaturan/conn.php");

$query1 = "insert into pemenang " . "(Nomor,Nama,Hadiah) " . " values ('$Nomor','$Nama','$Hadiah')";
$hasil1 = $mysqli->query($query1);
//$hasil1 = mysql_query($query1);

$query2 = "delete from tbl_hadiah " . "where Id = '$Id1'";
//$hasil2 = mysql_query($query2);
$hasil2 = $mysqli->query($query2);

$query3 = "delete from tbl_peserta " . "where Id = '$Id2'";
//$hasil3 = mysql_query($query3);
$hasil3 = $mysqli->query($query3);

if (($hasil1 == TRUE) and ($hasil2 == TRUE) and ($hasil3 == TRUE))
//if (($hasil1 == TRUE) and ($hasil2 == TRUE) )
{
echo"<script type='text/javascript'>window.location.href='index.php';</script>";
}
else
{
echo"<script type='text/javascript'>alert('Gagal');window.location.href='index.php';</script>";
}
mysql_close($koneksi);
?>
</body>