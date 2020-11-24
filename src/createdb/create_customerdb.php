<?php
include("connect.php");
$qr = "CREATE TABLE customer(
customerid INT(10),
lastname VARCHAR(20),
firstname VARCHAR(20),
phone VARCHAR(15),
PRIMARY KEY(customerid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'customer' created..!"
?>