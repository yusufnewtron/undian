<?php  if (!isset($_SESSION)) session_start();
if (isset($_SESSION['id']))
{
$_SESSION['id'];
$_SESSION['user'];	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?php 
}
?>