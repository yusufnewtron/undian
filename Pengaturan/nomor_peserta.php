<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Nomor/Peserta</a></h2>
		<div class="entry">
		<p>
		
		<form id="entri_peserta" action="?page=nomor_peserta" method="post">
		<table>
		<tr>
			<td>Nomor</td><td><input title="Masukan Nomor Peserta" type="text" size="30" name="Nomor" /></td>
			<td>Nama</td><td><input title="Masukan Nama Peserta" type="text" size="30" name="Nama" /></td>
			<td></td><td><input title="Simpan Data" type="submit" name="Simpan" value="Simpan" /></td>
		</tr>
		</form>
		<form id="upload" action="?page=nomor_peserta" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td></td><td><input title="Pilih File .xls" type="file" name="userfile" /></td>
			<td></td><td><input title="Proses Upload Data" type="submit" name="upload" value="Proses" /></td>
		</tr>
		</form>
		</table>
		
		
		<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['Simpan'])){
			$Nomor=$_POST['Nomor'];
			$Nama=$_POST['Nama'];
			
if (empty($Nomor)) die("<script type='text/javascript'>alert('Pastikan Data Terisi!');history.go(-1);</script>");
include ("conn.php");

$cek = mysql_num_rows(mysql_query("select Nomor from tbl_peserta where Nomor='$Nomor'"));

if ($cek == 0) {
$query = "insert into tbl_peserta " . "(Nomor,Nama)" . " values ('$Nomor','$Nama')";
$hasil = mysql_query($query);}
else {die("<script type='text/javascript'>alert('Data sudah ada!');history.go(-1);</script>");}

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
  $Nomor = $data->val($i, 1);
  $Nama = $data->val($i, 2);



  // setelah data dibaca, sisipkan ke dalam tabel tbl_peserta
  $query = "insert into tbl_peserta values ('','$Nomor','$Nama')";
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
		$view=mysql_query("select * from tbl_peserta order by Id asc");
		?>
		<br />
		<table class="datatable">
		<tr><th>No Undian</th><th>Nama</th><th>Pilihan</th></tr>
		<?php
		while($row=mysql_fetch_array($view)){
$Id = $row['Id'];
$Nomor = $row['Nomor'];
$Nama = $row['Nama'];

		?>
		<tr><td><?php echo $Nomor;?></td><td><?php echo $Nama;?></td><td align="center"><?php 
print("<a onClick=\"javascript:window.open('nomorpeserta_edit.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=100,status=no,scrollbars=yes')\">");
print("<img title='Edit' src='../images/edit.png'></a>");
print("&nbsp;&nbsp;&nbsp;");
print("<a onClick=\"javascript:window.open('nomorpeserta_hapus.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=100,status=no,scrollbars=yes')\">");
print("<img title='Hapus' src='../images/del.png'></a>");?></td></tr>
		<?php
		}
		?>
		</table>
				
		</p>
  	</div>
</div>


