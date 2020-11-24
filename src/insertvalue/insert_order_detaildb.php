<?php
include("connect.php");
$qr = "INSERT INTO order_detail(bookid,orderid,quantity) VALUES(1,1,2),
(4,1,1),
(6,2,2),
(7,2,3),
(5,3,1),
(3,4,2),
(4,4,1),
(7,4,1),
(1,5,1),
(1,6,2),
(1,7,1)";
mysqli_query($con, $qr) or die("failed");
echo "11 values inserted in table 'order_detail'..!"
?>