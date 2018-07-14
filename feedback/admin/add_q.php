<?php
include "../conn.php";
if(isset($_POST['submit1']))
{
	$w=mysqli_query($connect,"INSERT INTO text_ques( question, cat_id) VALUES ('$_POST[q]','1')");
	if($w)
	{
		header("location:add_ques.php?r=success");
		
	}
}
if(isset($_POST['submit2']))
{
	$w=mysqli_query($connect,"INSERT INTO y_ques( question, cat_id) VALUES ('$_POST[q1]','2')");
	if($w)
	{
		header("location:add_ques.php?r=success");
		
	}
}
if(isset($_POST['submit3']))
{
	$w=mysqli_query($connect,"INSERT INTO d_ques( question, op1, op2, op3, op4) VALUES ('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]')");
	if($w)
	{
		header("location:add_ques.php?r=success");
		
	}
}
if(isset($_POST['submit4']))
{
	$w2=mysqli_query($connect,"INSERT INTO r_ques( question,cat_id) VALUES ('$_POST[q4]','4')");
	if($w2)
	{
		header("location:add_ques.php?r=success");
		
	}
}