<html>
<body>
<p></p>
<h2>Number of orders made by each customer</h2>
<p></p>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// The sql code to make the statement correct to successfully display the number of orders each customer made
$res = $dbh->query("SELECT id, firstName, lastName, 
COUNT(receiptNum) FROM project.customer LEFT JOIN 
project.orders ON customer.id=orders.customerNum GROUP BY customer.id");

echo "<table><th>";

//Need speical column names
	echo "<td>";
	print "Customer id";
	echo "</td>";
	
	
	echo "<td>";
	print "first Name";
	echo "</td>";
	
	echo "<td>";
	print "last Name";
	echo "</td>";
	
	echo "<td>";
	print "Totally order made";
	echo "</td>";

echo "</th><tr>";

while($data = $res->fetch()){
	echo "<td>";
	
	echo "<td>";
	print $data["id"];
	echo "</td>";
	
	
	echo "<td>";
	print $data["firstName"];
	echo "</td>";
	
	echo "<td>";
	print $data["lastName"];
	echo "</td>";
	
	echo "<td>";
	print $data["COUNT(receiptNum)"];
	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";

?>


</body>
</html>