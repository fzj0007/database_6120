<?php
include("connect.php");
$qr = "DROP TABLE subject";
mysqli_query($con, $qr) or die("failed");
echo "Table 'subject' successfully dropped..!"
?>