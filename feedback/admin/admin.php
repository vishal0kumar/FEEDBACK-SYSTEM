<?php
include "../conn.php";
if(isset($_POST['submit1']))
{
    $n=$_POST['admin_name'];
    $p=$_POST['password'];
    $q=mysqli_query($connect,"select * from admin where name='$n' && password='$p' ");
    if(mysqli_num_rows($q)>0)
    {
        header("location:add.php");
    }
    else
    {
        header("location: alogin.php?run=fail");
    }





}
?>
