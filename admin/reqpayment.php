<?php
$r=$_POST['txtrid'];
$amount=$_POST['txtamount'];
include "myconnection.php";
$qem="select * from request where reqid='$r'";
$resultem=mysqli_query($connection,$qem);
while($data=mysqli_fetch_array($resultem))
{
    $em=$data['email'];
}
$qinsert="insert into payment(reqid,email,amount) values('$r','$em','$amount')";
$resultinsert=mysqli_query($connection,$qinsert) or die(mysqli_error($connection));

$qcmp="update request set status ='Completed' where reqid='$r'";
$resultcmp=mysqli_query($connection,$qcmp);
header("location:myrequest.php");

?>