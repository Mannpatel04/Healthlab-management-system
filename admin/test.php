<?php
include "myconnection.php";

$q="select * from labs";
$result=mysqli_query($connection,$q) or die("error");
$count=mysqli_num_rows($result);
echo "<table width=400>";

echo "<tr>";
        echo "<td>Lab Name</td>";
        
        echo "<td>";
        echo "Reg No";
        echo "</td>";
        echo "</tr>";
while($arr=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$arr['labname']."</td>";
        
        echo "<td>";
        echo $arr['labregno'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";



?>

