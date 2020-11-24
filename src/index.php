<html>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function getValue(cVal)
{
  document.getElementById("qr").innerHTML = cVal;
}

</script>
<meta name="color-scheme" content="dark light">
<style>
ul {
  text-align: center;
  list-style: inside;
}
table, th, td {
  border: 1px solid black;
}

body {
    display:flex; 
    flex-direction:column; 
    justify-content:center;
    min-height:100vh;
    font-family: "Lato", sans-serif;
    margin-top: 8px !important;
    margin-bottom: 8px !important;
    margin-right: 120px !important;
    margin-left: 120 !important;
}
</style>
<body>
<div ><h2 align="center">Graduate Group 5, Database Project, COMP 6120</h2></div>
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Book')" id="defaultOpen">Book</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Customer')" id="defaultOpen">Customer</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Employee')" id="defaultOpen">Employee</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Order')" id="defaultOpen">Order</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Order_detail')" id="defaultOpen">Order_detail</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Shipper')" id="defaultOpen">Shipper</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Supplier')" id="defaultOpen">Supplier</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Subject')" id="defaultOpen">Subject</a></li>
</ul>

<div id="Book" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Book ID</th>
    <th>Title</th>
    <th>Unit Price</th>
    <th>Author</th>
    <th>Quantity</th>
    <th>Supplier ID</th>
    <th>Subject ID</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from book";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["bookid"]. "</td><td>" . $row["title"]. "</td><td>" . $row["unitprice"] . "</td><td>" . $row["author"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["supplierid"] . "</td><td>" . $row["subjectid"] . "</td></tr>";
			
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>

<div id="Customer" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Customer ID</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Phone</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from customer";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["customerid"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["phone"] . "</td><td>";
			
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>

<div id="Employee" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Employee ID</th>
    <th>Last Name</th>
    <th>First Name</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from employee";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["employeeid"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["firstname"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>

<div id="Order" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Order ID</th>
    <th>Customer ID</th>
    <th>Employee ID</th>
    <th>Order Date</th>
    <th>Shipped Date</th>
    <th>Shipper ID</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from orderdb";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["orderid"]. "</td><td>" . $row["customerid"]. "</td><td>" . $row["employeeid"] . "</td><td>" . $row["orderdate"] . "</td><td>" . $row["shippeddate"] . "</td><td>" . $row["shipperid"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>

<div id="Order_detail" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Book ID</th>
    <th>Order ID</th>
    <th>Quantity</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from order_detail";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["bookid"]. "</td><td>" . $row["orderid"]. "</td><td>" . $row["quantity"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>

<div id="Shipper" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Shipper ID</th>
    <th>Shipper Name</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from shipper";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["shipperid"]. "</td><td>" . $row["shippername"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>


<div id="Supplier" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Supplier ID</th>
    <th>Company Name</th>
    <th>Contact Last Name</th>
	<th>Contact first Name</th>
    <th>Phone</th>  
  <?php
  include("connect.php");  
  $sql = "SELECT * from supplier";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["supplierid"]. "</td><td>" . $row["companyname"]. "</td><td>" . $row["contactlastname"] . "</td><td>" . $row["contactfirstname"] . "</td><td>" . $row["phone"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>


<div id="Subject" class="tabcontent">
  <table cellpadding="5" cellspacing="5">
  	<th>Subject ID</th>
    <th>Category Name</th>
  <?php
  include("connect.php");  
  $sql = "SELECT * from subject";
  $result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["subjectid"]. "</td><td>" . $row["categoryname"] . "</td><td>";
		}
		?></table><?php
	} else {
		echo "No results";
	}
  ?>
</div>



<div style="margin: 30px">
<form action="execute.php" mathod="POST" name="form">
<!-- Choose The Query
<select name="queries" onChange="getValue(this.value)">
<?php

$fh = fopen('/Applications/XAMPP/xamppfiles/htdocs/avj0003/query-questions.txt','r');
$fq = fopen('/Applications/XAMPP/xamppfiles/htdocs/avj0003/query.txt','r');
for ($x = 0; $x <19; $x++) {
    $line = fgets($fh);
    $question = fgets($fq);
  ?>
  <option value="<?php echo $question ?>"><?php echo $line ?> </option>
  
  
  <?php
  }
  fclose($fh);
  fclose($fq);
  ?>
</select> -->

<table>
<tr>
<td>
	<textarea id="qr" name="qr" rows="20" cols="100%" ></textarea>
</td>


</tr>
<tr>
<td>
  <input type="Submit" name="submit" value="Submit" />
</td>
</tr>
</table>
</form>
</div>

<table>


<?php
error_reporting(0);
$qr = $_REQUEST["qr"];
$a = str_replace("'", "", $qr);
$result = mysqli_query($con, $a);
$copy = mysqli_query($con, $a);
echo '<table>';
echo '<table cellpadding="5" cellspacing="5">';
$row1 = mysqli_fetch_assoc($copy);
if (strpos($a, 'DROP') !== false)
{
  echo  "<p> <font color=red>Please try another query. DROP is not allowed. Contact the admin for further questions at fzj0007@auburn.edu. </font> </p>";
}
   
else if($result == FALSE)
{
	echo "Incorrect Query" . "<br>";
}
if($row1 == NULL)
{
	echo "No Results" . "<br>";
}
foreach($row1 as $key=>$value) { echo '<td> <b><font color="red">',$key,'</td> </font></b>'; }
while ($row = mysqli_fetch_assoc($result)){
 echo '<tr>';
 foreach($row as $key=>$value) {
echo '<td>',$value,'</td>';
}
echo '</tr>';
}

  
?>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>    
</body>
</html>


