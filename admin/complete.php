<?php
$rid=$_GET['rid'];
include "myconnection.php";
$qcmp="update request set status ='Completed' where reqid='$rid'";
$resultcmp=mysqli_query($connection,$qcmp);
header("location:myrequest.php");
?>