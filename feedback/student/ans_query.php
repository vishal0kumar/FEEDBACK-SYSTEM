<?php
include "../conn.php";
session_start();
if(isset($_POST['ss']))
{
	$us=$_SESSION['un'];
	echo $us;
	echo $_POST['ans1'];
	echo $_POST['ans2'];
	echo $_POST['ans3'];
	echo $_POST['ans4'];
	echo $_POST['ans5'];
	echo $_POST['ans6'];
	echo $_POST['ans7'];
	echo $_POST['ans8'];
	
	 $qw=mysqli_query($connect,"INSERT INTO `answers`(`username`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`)  VALUES ('$us','$_POST[ans1]','$_POST[ans2]','$_POST[ans3]','$_POST[ans4]','$_POST[ans5]','$_POST[ans6]','$_POST[ans7]','$_POST[ans8]')"); 
	
	if($qw)
	{
		echo "ho gya";
	}
	
	
}
?>