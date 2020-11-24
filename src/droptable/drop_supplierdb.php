<?php
include("connect.php");
$qr = "DROP TABLE supplier";
mysqli_query($con, $qr) or die("failed");
echo "Table 'supplier' successfully dropped..!"
?>