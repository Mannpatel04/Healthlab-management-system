
                       <?php
						$labname=$_POST['txtlname'];
						$labreg=$_POST['txtreg'];
						$on=$_POST['txtowner'];
						$em=$_POST['txtemail'];
						$ph=$_POST['txtphoneno'];
						$add=$_POST['txtaddress'];
						$spec=$_POST['txtspecialities'];
						$pass=$_POST['txtpass'];

						include "myconnection.php";
					$q2="select * from labs where email='$em'";
					$result2=mysqli_query($connection,$q2) or die("query2 error");
					$count=mysqli_num_rows($result2);

					if($count==0)
					{
						
						$q3="insert into labs(labname,labregno,ownername,address,phoneno,email,specialities,status,password) values('$labname','$labreg','$on','$add','$ph','$em','$spec','Active','$pass')";
						$result3=mysqli_query($connection,$q3) or die(mysqli_error($connection));
						echo "success";
					}
					else
					{
						echo "Lab already exists";
					}
					?>
                      
                 