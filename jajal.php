<?php
include ("Pengaturan/conn.php");
$query = "select * from tbl_peserta order by rand() limit 1";
//$hasil = mysql_query($query);
$hasil = $mysqli->query($query);

//while($baris = mysql_fetch_row($hasil))
while($baris = mysqli_fetch_row($hasil))
{
$Id2 = $baris[0];
$Nomor = $baris[1];
$Nama = $baris[2];
}

?>
<tr><th>Nomor</th><th>Nama</th></tr>
<tr align="center" bgcolor="white" style="font-family:arial narrow;font-size:30px;font-weight:normal;">
<td><input  name="Nomor" bgcolor="white" style="text-align:center;width:100%;font-family:arial narrow;font-size:30px;font-weight:normal; type="text" readonly value="<?php echo $Nomor; ?>"> </td><td><input name="Nama" bgcolor="white" style="color:black;text-align:center;width:100%;font-family:arial narrow;font-size:30px;font-weight:normal; type="text" readonly value="<?php echo $Nama; ?>"></td></tr>
<input type="hidden" id="Id1" name="Id1" readonly value="<?php echo $Id1; ?>">
<input type="hidden" id="Id2" name="Id2" readonly value="<?php echo $Id2; ?>">

</table>