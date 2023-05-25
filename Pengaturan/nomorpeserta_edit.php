<?php 
include ("conn.php");
$Id = $_GET["Id"];
$query = "select * from tbl_peserta where Id='$Id'";
$hasil = mysql_query($query, $koneksi);
$baris = mysql_fetch_array($hasil);

$Nomor = $baris[1];
$Nama = $baris[2];

?>

<html>
<head>
<title>EDIT DATA</title>
</head>
<body bgcolor="#00FF00">
<fieldset>
<legend  align="center" style="font-family:arial narrow;font-size:20px;font-weight:bold;">EDIT DATA</legend>
<form action="nomorpeserta_edit.php" method="post">

<table>

<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">No Undian</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;" type="text" name="Nomor" value="<?php print($Nomor); ?>"></td>
</tr>
<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">Nama</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;" type="text" name="Nama" value="<?php print($Nama); ?>"></td>
</tr>
</table>

<table bgcolor="transparent" cellpadding="0">
<tr>
<td colspan="2" align="center">
<input type="hidden" name="Id" value="<?php print($Id); ?>">
<input type="submit" value="Simpan" name="Simpan" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
<input type="button" value="Batal" onClick="javascript:self.close()" style="font-family:arial narrow;font-size:11px;font-weight:bold;">
</td>
</tr>
</table>
</form>
</table>

<?php

if (isset($_POST['Simpan'])){
$Id = $_POST['Id'];
$Nomor = $_POST['Nomor'];
$Nama = $_POST['Nama'];

if (empty($Nomor)) die("<script type='text/javascript'>alert('Pastikan Data Terisi!');history.go(-1);</script>");
include ("conn.php");

$query = "update tbl_peserta set "."Nomor='$Nomor',"."Nama='$Nama'"." where Id='$Id'";
$hasil = mysql_query($query);

if ($hasil == TRUE) 
{
echo"<script type='text/javascript'>alert('Berhasil mengedit Data');window.opener.location.reload();self.close();</script>";
}
else
{
echo"<script type='text/javascript'>alert('Gagal mengedit Data!');history.go(-1);</script>";
}
}
mysql_close($koneksi);
?>
</fieldset>
</div>
</body>
</html>