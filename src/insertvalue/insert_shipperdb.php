<?php
include("connect.php");
$qr = "INSERT INTO shipper(shipperid,shippername) VALUES(1,'shipper1'),
(2,'shipper2'),
(3,'shipper3'),
(4,'shipper4')";
mysqli_query($con, $qr) or die("failed");
echo "7 values inserted in table 'shipper'..!"
?>