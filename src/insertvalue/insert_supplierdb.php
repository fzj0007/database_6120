<?php
include("connect.php");
$qr = "INSERT INTO supplier(supplierid,companyname,contactlastname,contactfirstname,phone) VALUES(1,'supplier1','company1','company1',1111111111),
(2,'supplier2','company2','company2',2222222222),
(3,'supplier3','company3','company3',3333333333),
(4,'supplier4','company4',NULL,4444444444)";
mysqli_query($con, $qr) or die("failed");
echo "4 values inserted in table 'supplier'..!"
?>