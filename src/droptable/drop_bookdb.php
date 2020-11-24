<?php
include("connect.php");
$qr = "DROP TABLE book";
mysqli_query($con, $qr) or die("failed");
echo "Table 'book' successfully dropped..!"
?>