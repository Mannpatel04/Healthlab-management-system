
                       <?php
						$cname = $_POST['txtcname'];

						$em = $_POST['txtemail'];

						$ph = $_POST['txtph'];
						$add = $_POST['txtaddress'];
						$city = $_POST['txtcity'];
						$area = $_POST['txtarea'];
						$pin = $_POST['txtpin'];
						$pass = $_POST['txtpass'];


						include "myconnection.php";
						$q3 = "select * from collectorinformation where email='$em'";
						$result3 = mysqli_query($connection, $q3) or die("query1 error");
						$count = mysqli_num_rows($result3);

						if ($count == 0) {

							$q4 = "insert into collectorinformation (collectorname,email,phoneno,address,city,pincode,status,collectionarea,password)values('$cname','$em','$ph','$add','$city','$pin','Active','$area','$pass')";
							$result4 = mysqli_query($connection, $q4) or die(mysqli_error($connection));
							echo "success";
						} else {
							echo "User already exists";
						}




						?>
                      
                        
                    