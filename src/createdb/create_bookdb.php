<?php
include("connect.php");
$qr = "CREATE TABLE book(
bookid INT(10),
title VARCHAR(10),
unitprice VARCHAR(10),
author VARCHAR(32),
quantity INT(10),
supplierid INT(10),
subjectid INT(10),
PRIMARY KEY(bookid),
FOREIGN KEY(supplierid) REFERENCES supplier(supplierid),
FOREIGN KEY(subjectid) REFERENCES subject(subjectid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'book' created..!"
?>