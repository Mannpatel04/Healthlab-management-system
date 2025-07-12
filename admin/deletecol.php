<?php
$cid=$_GET['collectorid'];
include "myconnection.php";
$q4="delete from collectorinformation where collectorid='$cid'";
$result4=mysqli_query($connection,$q4);
header("location:collector.php");
?>