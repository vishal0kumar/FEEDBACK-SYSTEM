<?php
session_start();
include "conn.php";
if(isset($_POST['submit'])) {
    $un = $_POST['username'];
    $ps = $_POST['password'];
	$_SESSION['username']=$un;
	
	

    $count = 0;
    $qu = "select * from studen where username='$un' && password='$ps'";
    $quer = mysqli_query($connect, $qu);
    $count = mysqli_num_rows($quer);
    if ($count == 0) {
      header("location: f.php?run=fail");
    } else if ($count == 1) {
        
        header("location: feedback.php?run=success");

    }
}

?>