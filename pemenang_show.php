<?php 
include ("Pengaturan/conn.php");
		//$view=mysql_query("select * from pemenang order by Id asc");
		$view=$mysqli->query("select * from pemenang order by Id asc");
		?>
		
		<table align="center" border="1" bgcolor="black" style="color:#FFFFFF; width:100%;font-family:arial narrow;font-size:20px;font-weight:bold;">
		<tr><th width='10px'>No</th><th>Penerima</th><th width='300px'>Bulan</th></tr>
		<?php
		$no=1;
		//while($row=mysql_fetch_array($view)){
		while($row=mysqli_fetch_array($view)){
$Id = $row ['Id'];
$Nomor = $row ['Nomor'];
$Nama = $row ['Nama'];
$Hadiah = $row ['Hadiah'];

		?>
		<tr align="left" bgcolor="white" style="color:black;font-family:arial narrow;font-size:18px;font-weight:normal;"><td><?php echo $no;?></td><td><?php echo $Nama;?></td><td><?php echo $Hadiah;?></td></tr>
		<?php
		$no++;
		}
		?>
		</table>
</br>


