<?php
include("connect.php");
$qr = "CREATE TABLE orderdb(
orderid INT(10),
customerid INT(10),
employeeid INT(10),
orderdate VARCHAR(10),
shippeddate VARCHAR(10),
shipperid INT(10),
PRIMARY KEY(orderid),
FOREIGN KEY(customerid) REFERENCES customer(customerid),
FOREIGN KEY(employeeid) REFERENCES employee(employeeid),
FOREIGN KEY(shipperid) REFERENCES shipper(shipperid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'order' created..!"
?>