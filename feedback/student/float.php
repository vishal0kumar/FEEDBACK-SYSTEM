<?php
include "../conn.php";
include "../fun.php";
session_start();

?>
<html>
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../s.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body >
<div class="container-fluid top-bar ">
    <div class="row ">

        <div  class="col-md-2" >

            <img  src="../img/l1.png " class="img-fluid"  style="height:230px;width: 255px" >
        </div>
        <div class="col-md-10">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../img/b1.jpg" class="img-responsive " style="height: 230px;width: 1300px">
                    </div>

                    <div class="item">
                        <img src="../img/b2.jpg" class="img-responsive "  style="height: 230px;width: 1300px">
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row" >
        <div class="col-md-2 navbar-toggler-icon" id="left_sidebar" style="background-color: lightgrey">

            <div style="font-size: large;align:center;background-color: white;padding:5px"> CATEGORY</div>
            <a href="alogin.php" class="form-control btn btn-danger" style="margin-top: 10px">ADMIN</a>
            <a href="../student/f.php" class="form-control btn btn-info" style="margin-top: 10px">STUDENT</a>
            <a href="../professor/plogin.php" class="form-control btn btn-success" style="margin-top: 10px">PROFESSOR</a>
        </div>







        <div class="col-md-10" style="height:700px;background-color: skyblue" >
            <div class="row">

                <div style="text-align: center;height:40px;text-shadow: lightgrey;font-size: 30px;color: blue;background-color: whitesmoke"><strong>ADMIN PORTAL</strong></div>
            </div>
            <div class="row" style="margin-top: 30px">

                <div class="col-md-2"></div>
                <div class="col-md-8" style="background-color :gray;height: 200px ">
					<center><STRONG style="color: antiquewhite">OPEN/CLOSE FEEDBACK</STRONG></center><br><br><br>
                    <a href="float.php?res=close" class="btn btn-danger text-capitalize " style="margin-left: 320px">CLOSE</a>
					<a href="float.php?res=open" class="btn btn-success text-capitalize " style="margin-left: 40px">OPEN</a>

                </div>
                <div class="col-md-1"></div>

            </div>
        </div>

        <div class="blockquote-footer">
            that's it
        </div>
            <?php
            if(isset($_POST["s1"])) {

                $filename = $_FILES["file"]["tmp_name"];


                if ($_FILES["file"]["size"] > 0) {
                    $file = fopen($filename, "r");
                    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {


                        $i1=mysqli_real_escape_string($connect, $getData[0]);
                        $i2=mysqli_real_escape_string($connect, $getData[1]);
                        $i3=mysqli_real_escape_string($connect, $getData[2]);
						$i4=mysqli_real_escape_string($connect, $getData[3]);
						$i5=mysqli_real_escape_string($connect, $getData[4]);
						$i6=mysqli_real_escape_string($connect, $getData[5]);
                        $r="INSERT INTO studen(username, name, course, email, p_address, password) VALUES ('$i1','$i2','$i3','$i4','$i5','$i6')";
                        $t=mysqli_query($connect,$r);
						
						
                        
                    }
					fclose($file);
                }
            }
			if(isset($_GET['res']) && $_GET['res']=="close")
		{
			$_SESSION['result']="close";
			
		}
		if(isset($_GET['res']) && $_GET['res']=="open")
		{
			$_SESSION['result']="open";
			
		}
	
	

            ?>



</body>
</html>
