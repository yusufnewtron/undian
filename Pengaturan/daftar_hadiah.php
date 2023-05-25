<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Daftar Hadiah</a></h2>
		<div class="entry">
		<p>
		
		<form id="entri_hadiah" action="?page=daftar_hadiah" method="post">
		<table>
		<tr>
			<td>Hadiah</td><td><input title="Masukan Hadiah" type="text" size="20" name="Hadiah" /></td>
			<td></td><td><input title="Simpan Data" type="submit" name="Simpan" value="Simpan" /></td>
		</tr>
		</form>
		<form id="upload" action="?page=daftar_hadiah" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td></td><td><input title="Pilih File .xls" type="file" name="userfile" /></td>
			<td></td><td><input title="Proses Upload Data" type="submit" name="upload" value="Proses" /></td>
		</tr>
		</form>
		</table>
		</form>
		
<?php
include "conn.php"; 
if(isset($_POST['Simpan'])){
$Hadiah=$_POST['Hadiah'];
						
if (empty($Hadiah)) die("<script type='text/javascript'>alert('Pastikan Data Terisi!');history.go(-1);</script>");
include ("conn.php");

$query = "insert into tbl_hadiah " . "(Hadiah)" . " values ('$Hadiah')";
$hasil = mysql_query($query);

if ($hasil == TRUE) 
{
echo"<script type='text/javascript'>alert('Berhasil menambahkan Data');window.opener.location.reload();self.close();</script>";
}
else
{
echo"<script type='text/javascript'>alert('Gagal menambahkan Data!');history.go(-1);</script>";
}
mysql_close($koneksi);
}

		
if(isset($_POST['upload'])){
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include ("conn.php");

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
  
  // membaca (kolom ke-1)
  $Hadiah = $data->val($i, 1);



  // setelah data dibaca, sisipkan ke dalam tabel tbl_hadiah
  $query = "insert into tbl_hadiah values ('','$Hadiah')";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}


?>
<script language="javascript">
alert("Data yang sukses diimpor :  "+"<?php echo $sukses; ?>"+"\n"+"Data yang gagal diimpor :  "+"<?php echo $gagal; ?>");
window.opener.location.reload();self.close();
</script>
<?php
}


//untuk menampilkan
include ("conn.php");
		$view=mysql_query("select * from tbl_hadiah order by Id asc");
		?>
		<br />
		<table class="datatable">
		<tr><th>No</th><th>Hadiah</th><th>Pilihan</th></tr>
		<?php
		while($row=mysql_fetch_array($view)){
$Id = $row ['Id'];
$Hadiah = $row ['Hadiah'];
		?>
		<tr><td><?php echo $c=$c+1;?></td><td><?php echo $Hadiah;?></td><td align="center"><?php 
print("<a onClick=\"javascript:window.open('hadiah_edit.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=100,status=no,scrollbars=yes')\">");
print("<img title='Edit' src='../images/edit.png'></a>");
print("&nbsp;&nbsp;&nbsp;");
print("<a onClick=\"javascript:window.open('hadiah_hapus.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=100,status=no,scrollbars=yes')\">");
print("<img title='Hapus' src='../images/del.png'></a>");?></td></tr>
		<?php
		}
		?>
		</table>
			
		</p>
  	</div>
</div>


