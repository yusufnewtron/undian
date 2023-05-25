<?php
include ("conn.php");
$Id = $_GET["Id"];
$query = "select * from pemenang where Id='$Id'";
$hasil = mysql_query($query, $koneksi);
$baris = mysql_fetch_array($hasil);
$Nomor = $baris['Nomor'];
$Nama = $baris['Nama'];
$Hadiah = $baris['Hadiah'];

?>

<html>
<head>
<title>KONFIRMASI KEMBALIKAN DATA</title>
</head>
<body  bgcolor="orange">
<fieldset>
<legend  align="center" style="font-family:arial narrow;font-size:20px;font-weight:bold;">KONFIRMASI KEMBALIKAN DATA</legend>
<form action="pemenang_kembalikan.php" method="post">

<table>

<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">No Undian</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;background-color:yellow;" type="text" readonly name="Nomor" value="<?php print($Nomor); ?>"></td>
</tr>
<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">Nama</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;background-color:yellow;" type="text" readonly name="Nama" value="<?php print($Nama); ?>"></td>
<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">Hadiah</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;background-color:yellow;" type="text" readonly name="Hadiah" value="<?php print($Hadiah); ?>"></td>
</tr>
</tr>
</table>

<table bgcolor="transparent" cellpadding="0">
<tr>
<td colspan="2" align="center">
<input type="hidden" name="Id" value="<?php print($Id); ?>">
<input type="submit" value="Kembalikan" name="Kembalikan" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
<input type="button" value="Batal" onClick="javascript:self.close()" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</table>

<?php

if (isset($_POST['Kembalikan'])){
$Id= $_POST['Id'];
$Nomor = $_POST['Nomor'];
$Nama = $_POST['Nama'];
$Hadiah = $_POST['Hadiah'];

if (empty($Id)) {
echo"<script type='text/javascript'>alert('Periksa Kembali Data!');window.opener.location.reload();self.close();</script>";
}

include ("conn.php");
$query1 = "insert into tbl_peserta " . "(Nomor,Nama)" . " values ('$Nomor','$Nama')";
$hasil1 = mysql_query($query1);

$query2 = "insert into tbl_hadiah " . "(Hadiah)" . " values ('$Hadiah')";
$hasil2 = mysql_query($query2);

$query3 = "delete from pemenang " . "where Id = '$Id'";
$hasil3 = mysql_query($query3);

if (($hasil1 == TRUE) and ($hasil2 == TRUE) and ($hasil3 == TRUE))
{
echo("<script type='text/javascript'>alert('Berhasil mengembalikan Data');window.opener.location.reload();self.close();</script>");
}
else
{
echo("<script type='text/javascript'>alert('Gagal mengembalikan Data!');window.opener.location.reload();self.close();</script>");
}
}
mysql_close($koneksi);

?>

</body>
</html>