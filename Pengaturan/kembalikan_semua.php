<?php

include ("conn.php");
$query1 = "insert into tbl_peserta (Nomor,Nama) select Nomor,Nama from pemenang";
$hasil1 = mysql_query($query1);

$query2 = "insert into tbl_hadiah (Hadiah) select Hadiah from pemenang";
$hasil2 = mysql_query($query2);

$query3 = "truncate table pemenang";
$hasil3 = mysql_query($query3);

if (($hasil1 == TRUE) and ($hasil2 == TRUE) and ($hasil3 == TRUE))
{
echo("<script type='text/javascript'>alert('Berhasil Mengembalikan Semua Data');window.location.href = '?page=pemenang';</script>");
}
else
{
echo("<script type='text/javascript'>alert('Gagal Mengembalikan Semua Data!');window.location.href = '?page=pemenang';</script>");
}

mysql_close($koneksi);

?>