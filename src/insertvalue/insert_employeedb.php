<?php
include("connect.php");
$qr = "INSERT INTO employee(employeeid,lastname,firstname) VALUES(1,'lastname5','firstname5'),
(2,'lastname6','firstname6'),
(3,'lastname6','firstname9')";
mysqli_query($con, $qr) or die("failed");
echo "3 values inserted in table 'employee'..!"
?>