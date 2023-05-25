<?php include "cek_session.php"; ?>
<div class="post">
	<h2 class="title"><a href="#">Pemenang</a></h2>
		<div class="entry">
		<p>
<style type="text/css">
#RollOver1 a
{
   display: block;
   position: absolute;
}
#RollOver1 a img
{
   position: absolute;
   z-index: 1;
   border-width: 0px;
}
#RollOver1 span
{
   display: block;
   height: 200px;
   width: 200px;
   position: absolute;
   z-index: 2;
}
#RollOver1 a .hover
{
   visibility: hidden;
}
#RollOver1 a:hover .hover
{
   visibility: visible;
}
#RollOver1 a:hover span
{
   visibility: hidden;
}

</style>
<div title="Kembalikan Semua Data" id="RollOver1" style="position:absolute;left:450px;top:250px;width:100px;height:100px;z-index:0">
<a href="?page=kembalikan_semua" onclick="return confirm('Apakah Anda yakin mengembalikan semua data?')">
<img class="hover" alt="" src="../images/restoreall-hover.png" style="width:100px;height:100px;">
<span><img alt="" src="../images/restoreall-active.png" style="width:100px;height:100px"></span>
</a>
</div>
<br><br><br><br>		
<?php 
include ("conn.php");
		$view=mysql_query("select * from pemenang order by Id asc");
		?>
		<br />
		<table class="datatable">
		<tr><th>No</th><th>No Undian</th><th>Pemberi</th><th>Penerima</th><th>Pilihan</th></tr>
		<?php
		while($row=mysql_fetch_array($view)){
$Id = $row ['Id'];
$Nomor = $row ['Nomor'];
$Nama = $row ['Nama'];
$Hadiah = $row ['Hadiah'];

		?>
		<tr><td><?php echo $c=$c+1;?></td><td><?php echo $Nomor;?></td><td><?php echo $Nama;?></td><td><?php echo $Hadiah;?></td><td align="center"><?php 
print("<a onClick=\"javascript:window.open('pemenang_kembalikan.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=300,status=no,scrollbars=yes')\">");
print("<img title='Kembalikan' src='../images/restore.png'></a>");
print("&nbsp;&nbsp;&nbsp;");
print("<a onClick=\"javascript:window.open('pemenang_hapus.php?Id=$Id','Window1','location=no,menubar=no,resizable=no,width=400,height=150,toolbar=no,screenX=400,screenY=300,status=no,scrollbars=yes')\">");
print("<img title='Hapus' src='../images/del.png'></a>");?></td></tr>
		<?php
		}
		?>
		</table>
				
		</p>
  	</div>
</div>


