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

    <img  src="../img/l1.png " class="img-fluid  "  style=" height:230px;width: 255px" >
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
        <div class="col-md-2 navbar-toggler-icon" id="left_sidebar" style="background-color: lightgrey;height: 3000px">

            <div style="font-size: large;align:center;background-color: white;padding:5px"> CATEGORY</div>
             <a href="../admin/alogin.php" class="form-control btn btn-danger" style="margin-top: 10px">ADMIN</a>
            <a href="../student/f.php" class="form-control btn btn-info" style="margin-top: 10px">STUDENT</a>
            <a href="plogin.php" class="form-control btn btn-success" style="margin-top: 10px">PROFESSOR</a>
        </div>






                        <div class="col-md-10 " style="height:700px;background-color: whitesmoke">
                            <div class="row">

                              <div style="text-align: center;height:40px;text-shadow: lightgrey;font-size: 30px;color: green;background-color: peachpuff"><strong>PROFESSOR PORTAL</strong></div>
                            </div>
                            <div class="row" style="margin-top: 30px">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="background-color : lightsteelblue; ">
                                  <h2 style="text-align: center;color: green"> -------LOG IN--------</h2>
                                  <form action="prof.php" method="post">
                                      <table class="table table-bordered text-capitalize">
                                          <tr></tr><tr><td>USERNAME:</td><td> <input  class="form-control" type="text" placeholder="Enter Username" name="prof_name" size="30"></td></tr>
                                          <tr></tr><tr><td>PASSWORD:</td><td> <input class="form-control" type="password" placeholder="Enter Password" name="password" size="30"> </td><tr>
                                          <tr></tr><tr></tr>
                                          <tr><td></td><td><input type="submit" name="submit2" value="LOGIN">&nbsp;
                                                  &nbsp;<input type="reset" value="RESET"></td><tr>
                                              <?php if(isset($_GET['run']) && $_GET['run']=="fail")
                                              {
                                                  ?>
                                                  <strong style="color:darkred"> INVALID Username or Password </strong>
                                                  <?php
                                              }
                                              ?>
                                      </table>
                              </div>

                            </form>
                            <div class="col-md-1"></div>

        </div>
                        </div>

<div class="blockquote-footer">
    that's it
</div>



</body>
</html>
