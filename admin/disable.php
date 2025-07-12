<?php
$lid=$_GET['lid'];
include "myconnection.php";
$q4="update labs set status='Disable' where labid='$lid'";
$result4=mysqli_query($connection,$q4);
header("location:viewlabs.php");
?>