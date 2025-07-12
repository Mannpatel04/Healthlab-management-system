
                       <?php
						$labname=$_POST['txtlname'];
						$labreg=$_POST['txtreg'];
						$on=$_POST['txtowner'];
						$em=$_POST['txtemail'];
						$ph=$_POST['txtphoneno'];
						$add=$_POST['txtaddress'];
						$spec=$_POST['txtspecialities'];

						include "myconnection.php";
                        $qedit="update labs set labname='$labname',labregno='$labreg',ownername='$on',phoneno='$ph',address='$add',specialities='$spec' where email='$em'";
                        $resultedit=mysqli_query($connection,$qedit);
                        echo "Lab has been updated sucessfully";					
                        ?>
					
						
						
                 