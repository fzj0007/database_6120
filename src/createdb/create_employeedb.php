<?php
include("connect.php");
$qr = "CREATE TABLE employee(
employeeid INT(10),
lastname VARCHAR(20),
firstname VARCHAR(20),
PRIMARY KEY(employeeid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'employee' created..!"
?>