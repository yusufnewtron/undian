<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arisan GVP</title>
<meta name="generator" content="WYSIWYG Web Builder 10 - http://www.wysiwygwebbuilder.com">
<link href="doorprize.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.11.1.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="jquery.ui.effect-blind.min.js"></script>
<script src="jquery.ui.effect-bounce.min.js"></script>
<script src="jquery.ui.effect-clip.min.js"></script>
<script src="jquery.ui.effect-drop.min.js"></script>
<script src="jquery.ui.effect-explode.min.js"></script>
<script src="jquery.ui.effect-fade.min.js"></script>
<script src="jquery.ui.effect-fold.min.js"></script>
<script src="jquery.ui.effect-highlight.min.js"></script>
<script src="jquery.ui.effect-pulsate.min.js"></script>
<script src="jquery.ui.effect-scale.min.js"></script>
<script src="jquery.ui.effect-shake.min.js"></script>
<script src="jquery.ui.effect-slide.min.js"></script>
<script src="fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.0.css">
<script src="fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script src="wwb10.min.js"></script>
</head>
<body background="images/back.jpg" style="background-size:100%;  background-position:35% 30%; background-repeat:no-repeat;" onload="ShowObject('wb_Image2', 0);ShowObject('wb_Image4', 0);ShowObject('wb_Image6', 0);return false;">

<div id="Html1" style="position:absolute;left:25%;top:250px;width:641px;height:134px;z-index:1">
<script>
function OnButton()
{
    document.postform.action = "pemenang_proses.php"
    document.postform.submit();             // Submit the page

    return false;
}
</script>
<script>
function konfirmasi(){
var a=confirm("Apakah anda yakin?");
if (a==true){
ShowObjectWithEffect('Html1', 0, 'slideleft', 2000, 'easeOutBounce');ShowObjectWithEffect('wb_Image6', 0, 'blindhorizontal', 2000, 'swing');ShowObjectWithEffect('wb_Image3', 1, 'dropdown', 2000, 'swing');ShowObjectWithEffect('Html1', 1, 'blindvertical', 2000, 'swing');PlayAudio('MediaPlayer3');setTimeout ("OnButton()", 2000);
}
else{
document.location.href="index.php";
}
}
</script>

<form name="postform" method="post">
<table align="center" border="1" bgcolor="black" style="color:#8A8A8A; width:100%;font-family:arial narrow;font-size:30px;font-weight:bold;">
<tr>
<?php
include ("Pengaturan/conn.php");
$query1 = "select * from tbl_hadiah order by Id limit 1";
//$hasil1 = mysql_query($query1, $koneksi);
$hasil1 = $mysqli->query($query1);
//$baris1 = mysql_fetch_row($hasil1);
$baris1 = mysqli_fetch_row($hasil1);
$Id1 = $baris1[0];
$Hadiah1 = $baris1[1];
$query2 = "select * from tbl_hadiah order by Id";
//$hasil2 = mysql_query($query2, $koneksi);
$hasil2 = $mysqli->query($query2);
//$baris2 = mysql_fetch_row($hasil2);
$baris2 = mysqli_fetch_row($hasil2);

$jsArray2 = "var NamaHadiah = new Array();\n";
?>
<select title="Pilih Hadiah" name="Hadiah" id="Hadiah"  style="width:100%;font-family:arial narrow;font-size:30px;font-weight:normal;background-color:yellow;" onChange="changeValue(this.value)">
<option value="<?php echo $Hadiah1 ?>" selected><?php echo $Id1.'. '.$Hadiah1; ?>
<?php
//while ($baris2 = mysql_fetch_array($hasil2)) {
while ($baris2 = mysqli_fetch_array($hasil2)) {
    	echo '<option value="' . $baris2['Hadiah'] . '">' . $baris2['Id'] .'. '. $baris2['Hadiah'] . '</option>';
    	$jsArray2 .= "NamaHadiah['" . $baris2['Hadiah'] . "'] = {satu:'" . addslashes($baris2['Id']) . "'};\n";
} 
?>
</option></select>
<script>
<?php 
echo $jsArray2;
 ?>

function changeValue(id){
document.getElementById('Id1').value = NamaHadiah[id].satu;
};
</script>
</tr>
<?php
//include ("./pengaturan/conn.php");
$query = "select * from tbl_peserta where Id!='$Id1' order by rand() limit 1";
//$hasil = mysql_query($query);
$hasil = $mysqli->query($query);
//print_r($hasil);

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
<td><input  name="Nomor" bgcolor="white" style="text-align:center;width:100%;font-family:arial narrow;font-size:30px;font-weight:normal;" type="text" readonly value="<?php echo $Id2; ?>"> </td>
<td><input name="Nama" bgcolor="white" style="color:black;text-align:center;width:100%;font-family:arial narrow;font-size:30px;font-weight:normal;" type="text" readonly value="<?php echo $Nama; ?>"></td></tr>
<input type="hidden" id="Id1" name="Id1" readonly value="<?php echo $Id1; ?>">
<input type="hidden" id="Id2" name="Id2" readonly value="<?php echo $Id2; ?>">

</table>
</form></div>
<h1><center><font style="color:blue; font-family:cursive; position:absolute;left:25%;top:600px;width:50%;height:100%;z-index:2;">Hasil Undian</font></center></h1>
<a target="_blank" href="export_pemenang.php" style="position:absolute;left:68%;top:625px;z-index:2;"><img src="images/download.png" style="width:90px; height:30px;"></a> 
<iframe name="InlineFrame2" id="InlineFrame2" style="position:absolute;left:25%;top:650px;width:50%;height:100%;z-index:2;" src="pemenang_show.php"></iframe>

<!--start, stop, refresh-->
<div id="wb_Image5" style="position:absolute;left:43%;top:400px;width:165px;height:159px;z-index:12;">
<a href="#" onclick="ShowObject('wb_Image3', 0);ShowObject('wb_Image5', 0);ShowObject('wb_Image2', 1);ShowObject('wb_Image4', 1);PlayAudio('MediaPlayer1');return false;"><img src="images/start.png" id="Image5" alt="" title="Mulai"></a></div>
<div id="wb_Image4" style="position:absolute;left:43%;top:400px;width:165px;height:159px;z-index:3;">
<a href="#" onclick="ShowObject('wb_Image2', 0);ShowObject('wb_Image3', 0);ShowObject('wb_Image4', 0);ShowObject('wb_Image5', 0);ShowObjectWithEffect('wb_Image6', 1, 'blindhorizontal', 2000, 'swing');StopAudio('MediaPlayer1');PlayAudio('MediaPlayer2');return false;"><img src="images/stop.png" id="Image4" alt="" title="Berhenti"></a></div>
<div id="wb_Image7" style="position:absolute;left:43%;top:400px;width:165px;height:159px;z-index:0;">
<a href="#" onclick="window.location.href='index.php';return false;"><img src="images/refresh.png" id="Image7" alt="" title="Segarkan"></a></div>


<!--menu setting, daftar peserta dan hadiah-->
<div id="RollOver1" style="position:absolute;left:3px;top:1px;overflow:hidden;width:50px;height:50px;z-index:4">
<a href="./pengaturan/index.php">
<img class="hover" alt="" title="Pengaturan" src="images/Setting-hover.png">
<span><img alt="" title="Pengaturan" src="images/Setting-active.png"></span>
</a>
</div>
<!--<div id="RollOver2" style="position:absolute;left:53px;top:1px;overflow:hidden;width:50px;height:50px;z-index:13">
<a href="javascript:displaylightbox('info.php',{})" target="_self">
<img class="hover" alt="" title="Info" src="images/info-hover.png">
<span><img alt="" title="Info" src="images/info-active.png"></span>
</a>
</div>-->
<div id="RollOver3" style="position:absolute;left:53px;top:1px;overflow:hidden;width:45px;height:45px;z-index:14">
<a href="javascript:displaylightbox('peserta_show.php',{})" target="_self">
<img class="hover" alt="" title="Daftar Peserta" src="images/participant-hover.png">
<span><img alt="" title="Daftar Peserta" src="images/participant-active.png"></span>
</a>
</div>
<div id="RollOver4" style="position:absolute;left:103px;top:2px;overflow:hidden;width:45px;height:45px;z-index:15">
<a href="javascript:displaylightbox('hadiah_show.php',{})" target="_self">
<img class="hover" alt="" title="Daftar Hadiah" src="images/parcel-hover.png">
<span><img alt="" title="Daftar Hadiah" src="images/parcel-active.png"></span>
</a>
</div>


<div id="wb_Image1" style="position:absolute;left:42%;top:1px;width:200px;height:200px;z-index:5;">
<img src="images/arisan.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:25%;top:288px;width:644px;height:93px;z-index:6;">
<img src="images/acak.gif" id="Image2" alt=""></div>
<div id="wb_Image3" style="position:absolute;left:25%;top:288px;width:644px;height:93px;z-index:7;">
<img src="images/acak_lama.png" id="Image3" alt=""></div>
<table style="position:absolute;left:25%;top:200px;width:642px;height:37px;z-index:8;" class="h7" id="Table1">
<tr>
<?php 
//include ("./pengaturan/conn.php");
$query = "SELECT * FROM pengaturan WHERE pengaturan.Id = '1'";
//$hasil = mysql_query($query, $koneksi);
$hasil = $mysqli->query($query);
//$baris = mysql_fetch_row($hasil);
$baris = mysqli_fetch_row($hasil);

$Penyelenggara = $baris[1];
$Tema1 = $baris[2];
$Tema2 = $baris[3];
?>
<td class="cell0"><span style="color:blue;font-family:cursive;font-size:30px;"><?php print($Penyelenggara); ?> </span></td>
</tr>
</table>
<div id="wb_Image6" style="position:absolute;left:73%;top:299px;width:73px;height:73px;z-index:9;">
<a href="#" onclick="return konfirmasi();return false;"><img src="images/save.png" id="Image6" alt="" title="Ok"></a></div>
<!--<table style="position:absolute;left:25%;top:240px;width:642px;height:37px;z-index:10;" class="h7" id="Table2">
<tr>
<td class="cell0"><?php print($Tema1); ?><span style="color:#000000;font-family:Arial;font-size:13px;"> </span></td>
</tr>
</table>
<table style="position:absolute;left:25%;top:280px;width:642px;height:37px;z-index:11;" class="h7" id="Table3">
<tr>
<td class="cell0"><?php print($Tema2); ?><span style="color:#000000;font-family:Arial;font-size:13px;"> </span></td>
</tr>
</table>-->


<div id="wb_MediaPlayer1" style="position:absolute;left:510px;top:627px;width:56px;height:54px;z-index:16;">
<audio src="DRUMROLL.WAV" id="MediaPlayer1" loop="loop">
</audio>
</div>
<div id="wb_MediaPlayer2" style="position:absolute;left:566px;top:628px;width:56px;height:53px;z-index:17;">
<audio src="CHIMES.WAV" id="MediaPlayer2">
</audio>
</div>
<div id="wb_MediaPlayer3" style="position:absolute;left:622px;top:627px;width:56px;height:54px;z-index:18;">
<audio src="LASER.WAV" id="MediaPlayer3">
</audio>
</div>
</body>
</html>