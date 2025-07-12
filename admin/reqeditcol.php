
                       <?php
						$cname = $_POST['txtcname'];
						$em = $_POST['txtemail'];
						$ph = $_POST['txtph'];
						$add = $_POST['txtaddress'];
						$city = $_POST['txtcity'];
						$pin = $_POST['txtpin'];
						$carea = $_POST['txtarea'];

						include "myconnection.php";
						$qcedit = "update collectorinformation set collectorname='$cname',phoneno='$ph',address='$add',city='$city',pincode='$pin',collectionarea='$carea' where email='$em'";
						$resultcedit = mysqli_query($connection, $qcedit);
						echo "Collector has been updated sucessfully";
						?>
					
						
					
                 