
                       <?php
                       $em = $_POST['txtem'];
					   $reqid=$_POST['txtrid'];
						$hm = $_POST['txthm'];
                        $wbc = $_POST['txtwbc'];
                        $plat = $_POST['txtplat'];
						$rbc = $_POST['txtrbc'];
						
                        
                    


						include "myconnection.php";
                        
						
          
                        
                                

					    $qinsert = "insert into bloodreport values('$em','$reqid','$hm','$wbc','$plat','$rbc')";
						$resultinsert = mysqli_query($connection, $qinsert) or die(mysqli_error($connection));
						echo "success";
						

						


						?>
                      
                        
                    