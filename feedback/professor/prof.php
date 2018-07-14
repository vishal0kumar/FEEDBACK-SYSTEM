<?php
include "../conn.php";
if(isset($_POST['submit2']))
{
    $n=$_POST['prof_name'];
    $p=$_POST['password'];
    $q=mysqli_query($connect,"select * from professsor where username='$n' && password='$p' ");
    $count1 = mysqli_num_rows($q);
    if ($count1 == 0) {
      header("location: plogin.php?run=fail");
    } else if ($count1 == 1) {
        $_SESSION[username]=$un;
        header("location: p_page.php?run=success");

    }





}
?>
