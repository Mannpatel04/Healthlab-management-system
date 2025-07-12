<?php
$lid=$_GET['labid'];
include "myconnection.php";
$q5="update labs set status='Disable' where labid='$lid'";
$result5=mysqli_query($connection,$q5);
header("location:viewlabs.php");
?>