
                       <?php
						$aname = $_POST['txtaname'];
                        $em = $_POST['txtemail'];
                        $pass = $_POST['txtpass'];
                        $ph = $_POST['txtph'];
						
						


						include "myconnection.php";
						$q3 = "select * from admin where email='$em'";
						$result3 = mysqli_query($connection, $q3) or die("query1 error");
						$count = mysqli_num_rows($result3);

						if ($count == 0) 
                        {
                            $q4 = "insert into admin(adminname,email,password,phoneno) values('$aname','$em','$pass','$ph')";
							$result4 = mysqli_query($connection, $q4) or die(mysqli_error($connection));
							echo " Sub-Admin Created Successfully";
						} 
                        else 
                        {
							echo "Admin already exists";
						}




						?>
                      
                        
                    