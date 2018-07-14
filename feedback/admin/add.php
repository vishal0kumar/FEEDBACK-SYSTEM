<?php
include "../conn.php";
include "../fun.php";

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
            <div class="row" style="margin-top: 20px">

                <a href="stu.php"> <div class="col-md-6" style="background-color: lemonchiffon;height: 100px"><strong class="text-capitalize" STYLE="margin:150px;font-size: 40px;">ADD STUDENT</strong> </div></a>

                <a href="add_prof.php"> <div class="col-md-6" style="background-color: lavender;height: 100px"><strong class="text-capitalize" STYLE="margin:100px;font-size: 40px;">ADD PROFESSOR</strong> </div></a>



            </div>
            <div class="row" style="margin-top: 20px">

                <a href="enr_stu.php"> <div class="col-md-6" style="background-color: lightcoral;height: 100px"><strong class="text-capitalize" STYLE="margin:130px;font-size: 35px;">ENROL STUDENT</strong> </div></a>

                <a href="assign_courses.php"> <div class="col-md-6" style="background-color: lightgreen;height: 100px"><strong class="text-capitalize" STYLE="margin:50px;font-size: 30px;">ASSIGN COURSES TO THE     PROFESSOR</strong> </div></a>



            </div>
            <div class="row" style="margin-top: 20px">

                <a href="add_ques.php"> <div class="col-md-6" style="background-color:lightpink;height: 100px"><strong class="text-capitalize" STYLE="margin:130px;font-size: 35px;">ADD QUESTIONS</strong> </div></a>

                <a href="float.php"> <div class="col-md-6" style="background-color: blueviolet;height: 100px"><strong class="text-capitalize" STYLE="margin:100px;font-size: 40px;">FLOAT FEEDBACK</strong> </div></a>



            </div>
            <div class="row" style="margin-top: 20px">

                <a href="review.php"> <div class="col-md-12" style="background-color: darksalmon;height: 100px"><strong class="text-capitalize" STYLE="margin:320px;font-size: 35px;">REVIEW THE IDENTITY REQUEST</strong> </div></a>




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

            ?>



</body>
</html>
