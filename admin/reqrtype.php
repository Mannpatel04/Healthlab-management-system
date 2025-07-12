<?php
						
						$rtypename=$_POST['txtrname'];
						$rdes=$_POST['txtrdes'];
						$price=$_POST['txtprice'];
						
						include "myconnection.php";
                        $qreport="select * from reporttype where reportname='$rtypename'";
                        $resultreport=mysqli_query($connection,$qreport);
					$count=mysqli_num_rows($resultreport);
					if($count==0)
					{
						
						$q3="insert into reporttype(reportname,reportdescription,price,status) values('$rtypename','$rdes','$price','Active')";
						$result3=mysqli_query($connection,$q3) or die(mysqli_error($connection));
						echo "success";
					}
					else
					{
						echo "Report already exists";
					}
					?>
                      