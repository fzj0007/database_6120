<?php
include("connect.php");
$qr = "INSERT INTO orderdb(orderid,customerid,employeeid,orderdate,shippeddate,shipperid) VALUES(1,1,1,'8/1/2016','8/3/2016',1),
(2,1,2,'8/4/2016',NULL,NULL),
(3,2,1,'8/1/2016','8/4/2016',2),
(4,4,2,'8/4/2016','8/4/2016',1),
(5,1,1,'8/4/2016','8/5/2016',1),
(6,4,2,'8/4/2016','8/5/2016',1),
(7,3,1,'8/4/2016','8/4/2016',1)";
mysqli_query($con, $qr) or die("failed");
echo "7 values inserted in table 'order'..!"
?>