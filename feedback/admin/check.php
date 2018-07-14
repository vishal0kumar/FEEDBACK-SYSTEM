<?php 
include "../conn.php";
if(isset($_POST["s31"])) {
				

                $filename = $_FILES["file"]["tmp_name"];


                if ($_FILES["file"]["size"] > 0) {
                    $file = fopen($filename, "r");
                    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {


                        $i11=mysqli_real_escape_string($connect, $getData[0]);
                        $i22=mysqli_real_escape_string($connect, $getData[1]);
                        
                        $r="update studen set semester='$i22' where username='$i11'";
                        $t=mysqli_query($connect,$r);
					
                    }
					fclose($file);
				}

                }
				?>