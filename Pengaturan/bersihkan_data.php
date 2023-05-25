<?php
include ("conn.php");

$query1 = "truncate table tbl_peserta";
$hasil1 = mysql_query($query1);


$query2 = "truncate table tbl_hadiah";
$hasil2 = mysql_query($query2);


$query3 = "truncate table pemenang";
$hasil3 = mysql_query($query3);

if (($hasil1 == true) and ($hasil2 == true) and ($hasil3 == true))
{
echo("<script type='text/javascript'>alert('Berhasil membersihkan Data');window.location.href = '?page=home';</script>");
}
else
{
echo("<script type='text/javascript'>alert('Gagal membersihkan Data!');window.location.href = '?page=home';</script>");
}
mysql_close($koneksi);
?>