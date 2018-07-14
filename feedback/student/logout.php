<?php
include "../conn.php";
session_start();
if(isset($_SESSION['username']))
{
    session_destroy();
    header("location: f.php");

}
else
{
    header("location: f.php");
}
?>