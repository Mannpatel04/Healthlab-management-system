<?php
    $host="localhost";
    $un="root";
    $password="";
    $db="elabs";

    $connection=mysqli_connect($host,$un,$password,$db) or die (mysqli_error($connection));

?>