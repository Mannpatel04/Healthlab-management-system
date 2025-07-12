<?php
include "myconnection.php";
$rid=$_GET['rid'];
$qts="update request set tstatus='Completed' where  reqid='$rid'";
$res=mysqli_query($connection,$qts);
header("Location:managerequests.php");
?>