<?php
$lid=$_GET['labid'];
include "myconnection.php";
$q6="update labs set status='Active' where labid='$lid'";
$result6=mysqli_query($connection,$q6);
header("location:viewlabs.php");
?>