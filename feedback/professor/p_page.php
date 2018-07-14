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





                        <div class="col-md-10 " style="height:3000px;background-color: lightgoldenrodyellow">
                            <div class="row">
 
                              <div style="text-align: center;height:40px;text-shadow: grey;font-size: 30px;color: blue;background-color: lightcoral"><strong>PROFESSOR PORTAL</strong></div>
                            </div>
                            <div class="row" style="margin-top: 30px">
                            <div class="col-md-1"></div>
                            <div class="col-md-10" style="background-color : salmon; ">
                                 <form  method="post" action="p_page.php">
                                    <table class="table table-bordered" >
                                        <tr>

                                            <td><select name="s5" class="form-control" >
                                                    <?php
                                                    {
                                                        $a1=mysqli_query($connect,"select username from answers");
                                                        while($r1=mysqli_fetch_array($a1))
                                                        {
                                                            echo "<option>";
                                                            echo $r1['username'];
                                                            echo "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select></td>
                                            <td><input type="submit" class="form-control" name="sub5" value="SHOW DETAIL" style="color:lightblue"></td>
                                        </tr>
                                    </table>
                               </form>

                                
                                <?php
                                if(isset($_POST['sub5'])) {
									 echo "<center><strong style='font-size: 20px;font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif''>QUESTIONS</strong></center>";
                                    global $t;
                                    $t = $_POST['s5'];
									$q=mysqli_query($connect,"select * from text_ques ");
                                    $i = 1;
	   					             while($row=mysqli_fetch_array($q)) {
						        	
									echo "
									<table class='table table-bordered' style='table-layout: fixed' >
									<thead>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> Q$i.  $row[question] </p> </th>
									</tr></thead></table>";
										$i=$i+1;
                          			  }
									 
								    
								
								
									$qa=mysqli_query($connect,"select * from y_ques ");
                                   
	   					            
									while($rw1a=mysqli_fetch_array($qa))
									{
									echo "
									<table class='table table-bordered' style='table-layout: fixed' >
									<thead>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> Q$i.  $rw1a[question] </p> </th>
									</tr></thead></table>";
										$i=$i+1;
                          			  }
									$qb=mysqli_query($connect,"select * from d_ques ");
									while($rw1b=mysqli_fetch_array($qb))
									{
									echo "
									<table class='table table-bordered' style='table-layout: fixed' >
									<thead>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> Q$i.  $rw1b[question] </p> </th>
									</tr></thead></table>";
										$i=$i+1;
                          			  }
									$qc=mysqli_query($connect,"select * from r_ques ");
									while($rw1c=mysqli_fetch_array($qc))
									{
									echo "
									<table class='table table-bordered' style='table-layout: fixed' >
									<thead>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> Q$i.  $rw1c[question] </p> </th>
									</tr></thead></table>";
										$i=$i+1;
                          			  }
									
									 
								
								  echo "<center><strong style='font-size: 20px;font-family: Cambria, 'Hoefler Text','Liberation Serif', Times, 'Times New Roman', 'serif''>ANSWERS</strong></center>";
									
								$ans=mysqli_query($connect,"select * from answers where username='$t'");
									while($an=mysqli_fetch_array($ans))
									
									{
										echo "
									<table class='table table-bordered' style='table-layout: fixed' >
									<thead>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans1.  $an[ans1] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans2.  $an[ans2] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans3.  $an[ans3] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans4.  $an[ans4] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans5.  $an[ans5] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans6.  $an[ans6] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans7.  $an[ans7] </p> </th>
									</tr>
									<tr class='danger '>
									<th ><p style=' word-wrap: break-word';> ans8.  $an[ans8] </p> </th>
									</tr>
									
									
									
									
									
									
									
									</thead></table>";
									
										
										
									}
									echo "<center><a href='../admin/req_admin.php?un=$t&&st=abusive' style='margin:10px' class='btn btn-primary'>ABUSIVE RESPONSE</a></center>";
								
								}
								if(isset($_GET['req']) && $_GET['req']=="accepted")
								{
									echo "<center><strong style='color:green'>YOUR REQUEST HAS BEEN SENT TO ADMIN</strong></center>";
								}
					        	?>
                             
							
                                    
                            <div class="col-md-1" ></div>

        </div>
                        </div>

<div class="blockquote-footer">
    that's it
</div>



</body>
</html>
