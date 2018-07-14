<?php
include "../conn.php";
session_start();
    if(isset($_SESSION['username'])) {
        $r = mysqli_query($connect, "select * from studen where username='$_SESSION[username]'");
        while ($d = mysqli_fetch_array($r)) {
            $_SESSION['us'] = $d['name'];
        }
		$_SESSION['un']=$_SESSION['username'];
    }
    else
    {
        header("location:f.php");
    }

?>
<html>
<head>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../s.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body >
<div class="container-fluid top-bar ">
    <div class="row ">

        <div  class="col-md-2" >

            <img  src="../img/l1.png " class="img-fluid"  style=" height:230px;width: 255px" >
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
        <div class="col-md-2 navbar-toggler-icon"  style="background-color: lightgrey;height:3200px">

            <div style="font-size: large;align:center;background-color: white;padding:5px"> CATEGORY</div>
            <a href="../admin/alogin.php" class="form-control btn btn-danger" style="margin-top: 10px">ADMIN</a>
            <a href="f.php" class="form-control btn btn-info" style="margin-top: 10px">STUDENT</a>
            <a href="../professor/plogin.php" class="form-control btn btn-success" style="margin-top: 10px">PROFESSOR</a>




        </div>

        <div class="col-md-10" style="height:3200px;background-color: skyblue" >
            <div class="row ">

                <div class="col-md-12 input-group" style="text-align: center;height:40px;text-shadow: lightgrey;font-size: 30px;color: blue;background-color: whitesmoke"><strong>ADMIN PORTAL</strong>

                <ul class="nav navbar-nav navbar-right">
                    <li style="display: inline">
                        <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" style="font-size: 15px">
                             <img  style="height: 20px;width:20px" alt="">  <h6>WELCOME..</h6><?php echo $_SESSION['us']?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>



                </ul>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">

                <div class="col-md-1"></div>
                <div class="col-md-10" style="background-color : lightgreen;height: 3000px ">


                    <?php
					if(isset($_GET['run']) && $_GET['run']=="success" && isset($_SESSION['result']) && $_SESSION['result']=="open" && isset($_SESSION['username']))
					{
						$q=mysqli_query($connect,"select * from text_ques ");
                        $i = 1;
						while($row=mysqli_fetch_array($q)) {
                        echo "
                        <form method='post' id='form1' action='ans_query.php'>
                         <table class='table table-bordered' style='table-layout: fixed' >
                            <thead>
                            <tr class='danger '>
                                <th ><p style=' word-wrap: break-word';> Q$i.  $row[question] </p> </th>
                            </tr>
                            <tr>
                                <th>  Ans$i.<textarea class='form-control' style='height:80px' name='ans$i'  required> </textarea></th>
                            </tr>
                          
       						";
                            $i=$i+1;
                          }
						
						$qq=mysqli_query($connect,"select * from y_ques ");
                        
						while($roww=mysqli_fetch_array($qq)) {
                        echo "
                        
                            <tr class='danger '>
                               <th ><p style=' word-wrap: break-word';> Q$i.  $roww[question] </p> </th>
                            </tr>
                            <tr  >
                                <th>  Ans$i.<input type='radio'  style='height:20px ;margin-left:30px'name='ans$i' value='YES'>&nbsp&nbspYES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								 <input type='radio'  style='height:20px;margin-left:30px' name='ans$i' value='NO' required>NO</th>
                            </tr>
                           
       						";
                            $i=$i+1;
                          }
						
						$qqq=mysqli_query($connect,"select * from d_ques ");
                        
						while($rowww=mysqli_fetch_array($qqq)) {
                        echo "
                        
                        
                          
                            <tr class='danger  '>
                                 <th ><p style=' word-wrap: break-word';> Q$i.  $rowww[question] </p> </th>
                            </tr>
						   
							
                           <tr  > <th>Ans$i.
                                <select  class='form-control' name='ans$i' >
								<option>$rowww[op1]</option>
								<option>$rowww[op2]</option>
								<option>$rowww[op3]</option>
								<option>$rowww[op4]</option>
                            
							</select>
							</th>
							</tr>
                            
                          
       						";
                            $i=$i+1;
                          }
						$qqqq=mysqli_query($connect,"select * from r_ques ");
                        
						while($rowwww=mysqli_fetch_array($qqqq)) {
                        echo "
                        
                        
                          
                            <tr class='danger  '>
                                 <th ><p style=' word-wrap: break-word';> Q$i.  $rowwww[question] </p> </th>
                            </tr>
						   </thead>
							
                           <tr  ><th> Ans$i.
						   
						  
                               <label for='input-1' class='control-label'></label>
                               <input id='input-1' name='ans$i' class='rating rating-loading' data-min='0' data-max='5' data-step='0.1'  required>  
							  </th> 
							</tr>
                            </thead>
                           </table>
       					
                            
							";
							$i=$i+1;
                          }
						
						
						
		                   $i--;
						   
                          
					
						?>
                        <center><input type="submit" value="SUBMIT FEEDBACK" name="ss" class="btn btn-INFO" /></center>
                    </form>

                        <?php
						}
					   
						else
						{
							echo " <center ><strong ><p style='font-size:30px;margin:50px'>                                                                                            SORRY FEEDBACK SYSTEM CLOSE RIGHT NOW               </p>  </strong></center>
							";
					    }
                    $_SESSION['username']=null;
						?>
						
   
	

                    
            </div>
        </div>

        <div class="blockquote-footer">
            that's it
        </div>




<script>
$("#input-id").rating();
</script>
		

</body>
</html>
