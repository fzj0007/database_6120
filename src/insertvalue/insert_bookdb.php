<?php
include("connect.php");
$qr = "INSERT INTO book(bookid,title,unitprice,author,quantity,supplierid,subjectid) VALUES(1,'book1','12.34','author1',5,3,1),(2,'book2','56.78','author2',2,3,1),
(3,'book3','90.12','author3',10,2,1),
(4,'book4','34.56','author4',12,3,2),
(5,'book5','78.90','author5',5,2,2),
(6,'book6','12.34','author6',30,1,3),
(7,'book7','56.90','author2',17,3,4),
(8,'book8','33.44','author7',2,1,3)";
mysqli_query($con, $qr) or die("failed");
echo "8 values inserted in table 'book'..!"
?>