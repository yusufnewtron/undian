<?php include ("cek_session.php"); ?>
<div class="post">
	<h2 class="title"><a href="#">Registrasi Door Prize </a></h2>
		<div class="entry">
		<p>Klik "Clean" Untuk Membersihkan Semua Data </p>
		<p>Klik "GO" Untuk Memulai Undian Door Prize </p>
	</div>
<style type="text/css">
#RollOver1 a
{
   display: block;
   position: absolute;
}
#RollOver2 a
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
#RollOver2 a img
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
#RollOver2 span
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
#RollOver2 a .hover
{
   visibility: hidden;
}
#RollOver1 a:hover .hover
{
   visibility: visible;
}
#RollOver2 a:hover .hover
{
   visibility: visible;
}
#RollOver1 a:hover span
{
   visibility: hidden;
}
#RollOver2 a:hover span
{
   visibility: hidden;
}

</style>


<div title="Bersihkan Semua Data" id="RollOver1" style="position:absolute;left:450px;top:350px;width:100px;height:100px;z-index:0">
<a href="?page=bersihkan_data" onclick="return confirm('Apakah Anda yakin menghapus semua data?')">
<img class="hover" alt="" src="../images/clean-hover.png" style="width:100px;height:100px;">
<span><img alt="" src="../images/clean-active.png" style="width:100px;height:100px"></span>
</a>
</div>
<div title="Mulai Door Prize" id="RollOver2" style="position:absolute;left:600px;top:350px;width:100px;height:100px;z-index:0">
<a href="go.php">
<img class="hover" alt="" src="../images/go-hover.png" style="width:100px;height:100px;">
<span><img alt="" src="../images/go-active.png" style="width:100px;height:100px"></span>
</a>
</div>
</div>


