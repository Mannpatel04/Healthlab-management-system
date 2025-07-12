<?php
$lid=$_GET['lid'];
include "myconnection.php";
$q4="delete from labs where labid='$lid'";
$result4=mysqli_query($connection,$q4);
header("location:viewlabs.php");
?>