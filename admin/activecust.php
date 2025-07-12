<?php
$em=$_GET['email'];
include "myconnection.php";
$q4="update registration set status='Active' where email='$em'";
$result4=mysqli_query($connection,$q4);
header("location:customer.php");
?>