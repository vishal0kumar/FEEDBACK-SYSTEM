<?php
include "../conn.php";
if(isset($_GET['st']) && $_GET['st']=="abusive" )
{
	$qr=mysqli_query($connect,"update answers set status='abusive' where username='$_GET[un]'");
	if($qr)
	{
		header("location:../professor/p_page.php?req=accepted");
	}
	
}
?>