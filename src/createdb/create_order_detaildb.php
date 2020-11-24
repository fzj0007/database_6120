<?php
include("connect.php");
$qr = "CREATE TABLE order_detail(
bookid INT(10),
orderid INT(10),
quantity INT(10),
FOREIGN KEY(bookid) REFERENCES book(bookid),
FOREIGN KEY(orderid) REFERENCES orderdb(orderid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'order_detail' created..!"
?>