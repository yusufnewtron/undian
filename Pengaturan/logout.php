<?php  if (!isset($_SESSION)) session_start();
if (isset($_SESSION['id']))
{
	session_unset();
	//session_destroy();
	?><script language="javascript">
	document.location="index.php";
	</script><?php 
	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?php 
}
?>