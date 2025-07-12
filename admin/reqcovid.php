
                       <?php
                        $em = $_POST['txtem'];
					    $reqid=$_POST['txtrid'];
						$rdrp = $_POST['txtrdrp'];
                        $gene = $_POST['txtgene'];
                        $rnase = $_POST['txtrnase'];
                        $sars = $_POST['txtsars'];
						
                        
                    
						include "myconnection.php";
					    $qinsert = "insert into covid values('$em','$reqid','$rdrp','$gene','$rnase','$sars')";
						$resultinsert = mysqli_query($connection, $qinsert) or die(mysqli_error($connection));
						echo "success";
					
						?>
                      
                        
                    