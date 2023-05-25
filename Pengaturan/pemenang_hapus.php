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
<title>KONFIRMASI HAPUS DATA</title>
</head>
<body  bgcolor="#FF0000">
<fieldset>
<legend  align="center" style="font-family:arial narrow;font-size:20px;font-weight:bold;">KONFIRMASI HAPUS DATA</legend>
<form action="pemenang_hapus.php" method="post">

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
<input type="submit" value="Hapus" name="Hapus" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
<input type="button" value="Batal" onClick="javascript:self.close()" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</table>

<?php

if (isset($_POST['Hapus'])){
$Id= $_POST["Id"];

if (empty($Id)) {
echo"<script type='text/javascript'>alert('Periksa Kembali Data!');window.opener.location.reload();self.close();</script>";
}

include ("conn.php");
$query = "delete from pemenang " . "where Id = '$Id'";
$hasil = mysql_query($query);
if ($hasil == true)
{
echo("<script type='text/javascript'>alert('Berhasil menghapus Data');window.opener.location.reload();self.close();</script>");
}
else
{
echo("<script type='text/javascript'>alert('Gagal menghapus Data!');window.opener.location.reload();self.close();</script>");
}
}
mysql_close($koneksi);

?>

</body>
</html>