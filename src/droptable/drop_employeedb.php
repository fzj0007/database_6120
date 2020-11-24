<?php
include("connect.php");
$qr = "DROP TABLE employee";
mysqli_query($con, $qr) or die("failed");
echo "Table 'employee' successfully dropped..!"
?>