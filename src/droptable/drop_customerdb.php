<?php
include("connect.php");
$qr = "DROP TABLE customer";
mysqli_query($con, $qr) or die("failed");
echo "Table 'customer' successfully dropped..!"
?>