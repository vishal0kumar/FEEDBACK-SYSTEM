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
            <div class="row" style="margin-top: 30px">

               <div class="x_content">
				   <center> <strong >ADD QUESTIONS</strong></center>
                                <form  method="post" action="add_ques.php">
                                    <table class="table table-bordered" >
                                        <tr>

                                            <td><select name="s1" class="form-control" >
                                                    <?php
                                                    {
                                                        $a1=mysqli_query($connect,"select * from ques_cat");
                                                        while($r1=mysqli_fetch_array($a1))
                                                        {
                                                            echo "<option>";
                                                            echo $r1['type'];
                                                            echo "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select></td>
                                            <td><input type="submit" class="form-control" name="sub1" value="SELECT CATEGORY" style="color:lightblue"></td>
                                        </tr>
                                    </table>
                               </form>
							   
							    <?php if(isset($_GET['r']) && $_GET['r']=="success")
                                              {
                                                  ?>
                                                  <strong style="color:darkred"> ADDED SUCCESSFULLY </strong>
                                                  <?php
                                              }
                                              ?>
                                 <div class="rating" style="margin:20px;font-size: 30px;display: none">
									 <input class=" fa fa-star" type="radio" name="sar" id="star1"><label for="star1"></label>
									 <input class=" fa fa-star" type="radio" name="sar" id="star2"><label for="star2"></label>
									 <input class=" fa fa-star" type="radio" name="sar" id="star3"><label for="star3"></label>
									 <input class=" fa fa-star" type="radio" name="sar" id="star4"><label for="star4"></label>
									 <input class=" fa fa-star" type="radio" name="sar" id="star5"><label for="star5"></label>
				   </div>

                                <?php
                                if(isset($_POST['sub1'])) {
                                   

                                    $a2 = mysqli_query($connect, "select cat_id from ques_cat where type='$_POST[s1]'");
                                    while ($r2 = mysqli_fetch_array($a2)) {
										global $id;
										$id=$r2['cat_id'];
                                           
									}
									?>
				                      
									
								
									<?php
									if($id=='1')
									{
										echo "
										<form method='post' action='add_q.php'>
										QUESTION: <textarea type='text' name='q' class='form-control'></textarea>
										
										<center><input type='submit' name='submit1' value='ADD' class='btn btn-info' style='margin:30px'><center>
										</form>
										";
       								}
									
									if($id=='2')
									{
										echo "
										<form method='post' action='add_q.php'>
										QUESTION: <textarea type='text' name='q1' class='form-control'></textarea>
										
										<center><input type='submit' name='submit2' value='ADD' class='btn btn-info' style='margin:30px'><center>
										</form>
										";
       								}
									if($id=='3')
									{
										echo "
										<form method='post' action='add_q.php'>
										QUESTION: <textarea type='text' name='a1' class='form-control'></textarea>
										OPTION 1:<input type='text' name='a2' class='form-control'>
									    OPTION 2:<input type='text' name='a3' class='form-control'>
										OPTION 3:<input type='text' name='a4' class='form-control'>
										OPTION 4:<input type='text' name='a5' class='form-control'>
										<center><input type='submit' name='submit3' value='ADD' class='btn btn-info' style='margin:30px'><center>
										</form>
										";
       								}
									if($id=='4')
									{
										echo "
										<form method='post' action='add_q.php'>
										QUESTION: <textarea type='text' name='q4' class='form-control'></textarea>
										
										<center><input type='submit' name='submit4' value='ADD' class='btn btn-info' style='margin:30px'><center>
										</form>
										";
       								}
									
									
									
									
									
									
									
									
									
									
								}
                                       
                                        ?>
                                       
                                
								
                                   




                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
