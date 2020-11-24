<?php
include("connect.php");
$qr = "DROP TABLE order_detail";
mysqli_query($con, $qr) or die("failed");
echo "Table 'order_detail' successfully dropped..!"
?>