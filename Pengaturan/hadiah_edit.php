<?php 
include ("conn.php");
$Id = $_GET["Id"];
$query = "select * from tbl_hadiah where Id='$Id'";
$hasil = mysql_query($query, $koneksi);
$baris = mysql_fetch_array($hasil);
$Hadiah = $baris['Hadiah'];

?>

<html>
<head>
<title>EDIT DATA</title>
</head>
<body bgcolor="#00FF00">
<fieldset>
<legend  align="center" style="font-family:arial narrow;font-size:20px;font-weight:bold;">EDIT DATA</legend>
<form action="hadiah_edit.php" method="post">

<table>

<tr>
<td  width="100px" style="font-family:arial narrow;font-size:12px;font-weight:bold;">Hadiah</td>
<td><input style="width:250;font-family:arial narrow;font-size:11px;font-weight:normal;" type="text" name="Hadiah" value="<?php print($Hadiah); ?>"></td>
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
$Hadiah = $_POST['Hadiah'];

if (empty($Hadiah)) die("<script type='text/javascript'>alert('Pastikan Data Terisi!');history.go(-1);</script>");
include ("conn.php");

$query = "update tbl_hadiah set "."Hadiah='$Hadiah'"." where Id='$Id'";
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