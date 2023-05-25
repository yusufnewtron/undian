<?php include "cek_session.php"; 
include ("conn.php");
$query = "SELECT * FROM pengaturan WHERE pengaturan.Id = '1'";
$hasil = mysql_query($query, $koneksi);
$baris = mysql_fetch_row($hasil);

$Penyelenggara = $baris[1];
$Tema1 = $baris[2];
$Tema2 = $baris[3];
?>
<div class="post">
	<h2 class="title"><a href="#">Pengaturan</a></h2>
		<div class="entry">
		<p>
		
		<form id="pengaturan" action="?page=pengaturan" method="post">
		<table>
		<tr>
			<td>Penyelenggara</td><td><input type="text" size="30" name="penyelenggara" value="<?php print($Penyelenggara); ?>" /></td>
		</tr>
		<tr>
			<td>Tema 1</td><td><input type="text" size="80" name="tema1" value="<?php print($Tema1); ?>" /></td>
		</tr>
		<tr>
			<td>Tema 2</td><td><input type="text" size="80" name="tema2" value="<?php print($Tema2); ?>" /></td>
		</tr>
		<tr>
			<td>Banner</td><td><input type="file" name="banner" style="width:80"></td>
		</tr>
		<tr>
			<td></td><td><img title="Format JPG"src="../images/banner.jpg" width="600px" height="100px"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="Simpan" value="Simpan" /></td>
		</tr>
		</table>
		</form>
		
<?php 
include "conn.php";

$PENYELENGGARA = $_POST['penyelenggara'];
$TEMA1 = $_POST['tema1'];
$TEMA2 = $_POST['tema2'];
		

 if (isset($_POST['Simpan'])){
		// Simpan ke Database
		$query = "UPDATE pengaturan SET " . "Penyelenggara = '$PENYELENGGARA', " . "Tema1 = '$TEMA1', " . "Tema2 = '$TEMA2'" . " WHERE Id = '1'";
		mysql_query($query);
		// Simpan di Folder Gambar
		move_uploaded_file($_FILES['banner']['tmp_name'], "../images/banner.jpg");
		echo"<script>alert('Berhasil merubah Pengaturan');window.location.href='admin.php?page=pengaturan';</script>";	
	}
header ("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
header ("Cache-Control: no-cache, must-revalidate");  
header ("Pragma: no-cache");	 
?>
				
		</p>
  	</div>
</div>


