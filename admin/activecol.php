<?php
$cid=$_GET['collectorid'];
include "myconnection.php";
$q4="update collectorinformation set status='Active' where collectorid='$cid'";
$result4=mysqli_query($connection,$q4);
header("location:collector.php");
?>