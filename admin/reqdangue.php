
                       <?php
                        $em = $_POST['txtem'];
					    $reqid=$_POST['txtrid'];
						$hm = $_POST['txthm'];
                        $wbc = $_POST['txtwbc'];
                        $plat = $_POST['txtplat'];
						$rbc = $_POST['txtrbc'];
						$hct = $_POST['txthct'];
						$mcv = $_POST['txtmcv'];
						$mch = $_POST['txtmch'];
						$mchc = $_POST['txtmchc'];
                        $neu = $_POST['txtneu'];
                        $lym = $_POST['txtlym'];
                        $mono = $_POST['txtmono'];
                        
                    
						include "myconnection.php";
					    $qinsert = "insert into dangue values('$em','$reqid','$hm','$wbc','$plat','$rbc','$hct','$mcv','$mch','$mchc','$neu','$lym','$mono')";
						$resultinsert = mysqli_query($connection, $qinsert) or die(mysqli_error($connection));
						echo "success";
					
						?>
                      
                        
                    