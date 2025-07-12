<?php
session_start();
include "secadm.php";

						$cp=$_POST['txtpass'];
						$newpass=$_POST['txtnpass'];
                        $cnpass=$_POST['txtcnpass'];
                        $adm=$_SESSION['adm'];
						

					include "myconnection.php";
					$q="select * from admin where email='$adm' and password='$cp'";
               
					$result=mysqli_query($connection,$q) or die(mysqli_error($connection));
					$count=mysqli_num_rows($result);
                   
					if($count>0)
					{
						$q1="update admin set password='$cnpass' where email='$adm'";
                        $result=mysqli_query($connection,$q1) or die(mysqli_error($connection));
                        echo "Password has been Change Sucessfully ";
					}
					else
					{
						echo "invalid password";
					}
					

?>