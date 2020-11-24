<?php
include("connect.php");
$qr = "DROP TABLE shipper";
mysqli_query($con, $qr) or die("failed");
echo "Table 'shipper' successfully dropped..!"
?>