<?php 
include ("Pengaturan/conn.php");
		//$view=mysql_query("select * from tbl_peserta order by Id asc");
		$view=$mysqli->query("select * from tbl_peserta order by Id asc");
		?>
<html>
<body bgcolor="">		
<center><font style="color:blue; font-size:30px;">Daftar Peserta</font><center>
<table align="center" border="1" bgcolor="black" style="color:#8A8A8A; width:100%;font-family:arial narrow;font-size:20px;font-weight:bold;">
		<tr>
			<th width='10px'>No</th>
			<th width='150px'>No Undian</th>
			<th>Nama</th>
		</tr>
		<?php
		$no=1;
		//while($row=mysql_fetch_array($view)){
		while($row=mysqli_fetch_array($view)){
			$Id = $row ['Id'];
			$Nomor = $row ['Nomor'];
			$Nama = $row ['Nama'];

		?>
			<tr align="left" bgcolor="white" style="color:black;font-family:arial narrow;font-size:20px;font-weight:normal;">
				<td><?php echo $no;?></td>
				<td><center><?php echo $Nomor;?></center></td>
				<td><?php echo $Nama;?></td>
			</tr>
		<?php
		$no++;
		}
		?>
		</table>
</body>
<html>

