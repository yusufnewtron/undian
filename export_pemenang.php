<?php

$now=date('Y-m-d H:i:s');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar Pemenang Undian".$now.".xls");
?>
<h1>DAFTAR PEMENANG UNDIAN</h1></br>
		<table class='display' border='1'>
        <thead>
        <tr>
			<th width='100px'>NO UNDIAN</th>
			<th width='200px'>NAMA PESERTA</th>
			<th width='100px'>HADIAH</th>
		</tr> 
		</thead>
        <tbody>
		<?php
			$host="localhost";
			$user="doorprize";
			$pass="doorprize123";
			$db="doorprize";


			$koneksi=mysql_connect($host,$user,$pass);
			mysql_select_db($db,$koneksi);
			$tampil = mysql_query("select * from pemenang order by Id asc ");
  
			$no = 1;
			while($r=mysql_fetch_array($tampil)){ ?>
			<tr>
                <td><?php echo $r['Nomor'];?></td>
                <td><?php echo $r['Nama'];?></td>
                <td><?php echo $r['Hadiah'];?></td>
		    </tr>
			<?php
    } ?>
    </tbody>
		</table>
