<?php
include("connect.php");
$qr = "CREATE TABLE supplier(
supplierid INT(10),
companyname VARCHAR(20),
contactlastname VARCHAR(20),
contactfirstname VARCHAR(20),
phone INT(10),
PRIMARY KEY(supplierid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'supplier' created..!"
?>
