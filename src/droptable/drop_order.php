<?php
include("connect.php");
$qr = "DROP TABLE orderdb";
mysqli_query($con, $qr) or die("failed");
echo "Table 'order' successfully dropped..!"
?>