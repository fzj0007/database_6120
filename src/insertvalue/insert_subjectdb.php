<?php
include("connect.php");
$qr = "INSERT INTO subject(subjectid,categoryname) VALUES(1,'category1'),
(2,'category2'),
(3,'category3'),
(4,'category4'),
(5,'category5')";
mysqli_query($con, $qr) or die("failed");
echo "5 values inserted in table 'subject'..!"
?>