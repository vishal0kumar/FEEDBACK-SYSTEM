<?php
include "../conn.php";
if(isset($_POST['sub8']) )
{
	echo ";lkjbh";
	global $v;
	$v=$_POST['s8'];
	echo $v;
	$qr=mysqli_query($connect,"update answers set approval='rejected' where username='$v'");
	if($qr)
	{
		header("location:review.php?req=accepted");
	}
	
}
?>


