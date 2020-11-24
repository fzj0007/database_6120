<?php
include("connect.php");
$qr = "CREATE TABLE shipper(
shipperid INT(10),
shippername VARCHAR(20),
PRIMARY KEY(shipperid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'shipper' created..!"
?>