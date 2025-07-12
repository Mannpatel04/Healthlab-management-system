
                       <?php
                       $em = $_POST['txtem'];
					   $reqid=$_POST['txtrid'];
						$t3 = $_POST['txtt3'];
                        $t4 = $_POST['txtt4'];
                        $tsh = $_POST['txttsh'];
						
						
						include "myconnection.php";
					    $qinsert = "insert into thyroid values('$em','$reqid','$t3','$t4','$tsh')";
						$resultinsert = mysqli_query($connection, $qinsert) or die(mysqli_error($connection));
						echo "success";
						

						


						?>
                      
                        
                    