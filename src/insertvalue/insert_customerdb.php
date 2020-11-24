<?php
include("connect.php");
$qr = "INSERT INTO customer(customerid,lastname,firstname,phone) VALUES(1,'lastname1','firstname1','334-001-001'),
(2,'lastname2','firstname2','334-002-002'),
(3,'lastname3','firstname3','334-003-003'),
(4,'lastname4','firstname4','334-004-004')";
mysqli_query($con, $qr) or die("failed");
echo "4 values inserted in table 'customer'..!"
?>