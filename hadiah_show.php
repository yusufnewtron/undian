<?php 
include ("Pengaturan/conn.php");
		//$view=mysql_query("select * from tbl_hadiah order by Id asc");
		$view=$mysqli->query("select * from tbl_hadiah order by Id asc");
		?>
<html>
<body bgcolor="">
<center><font style="color:blue; font-size:30px;">Daftar Bulan</font><center>		
<table align="center" border="1" bgcolor="black" style="color:#8A8A8A; width:100%;font-family:arial narrow;font-size:20px;font-weight:bold;">
		<tr>
			<th>No</th>
			<th>Hadiah</th>
		</tr>
		<?php
		$no=1;
		//while($row=mysql_fetch_array($view)){
		while($row=mysqli_fetch_array($view)){
			$Id = $row ['Id'];
			$Hadiah = $row ['Hadiah'];

		?>
			<tr align="left" bgcolor="white" style="color:black;font-family:arial narrow;font-size:20px;font-weight:normal;">
				<td><?php echo $no;?></td>
				<td><?php echo $Hadiah;?></td>
			</tr>
		<?php
		$no++;
		}
		?>
		</table>
</body>
</html>

