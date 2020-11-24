<?php
include("connect.php");
$qr = "CREATE TABLE subject(
subjectid INT(10),
categoryname VARCHAR(20),
PRIMARY KEY(subjectid)
)";
mysqli_query($con, $qr) or die("failed");
echo "Table 'subject' created..!"
?>
