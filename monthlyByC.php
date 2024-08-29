<html>
<body>
<p></p>
<h2>Monthly orders by each customer </h2>
<p></p>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// The sql code to make the statement correct
$res = $dbh->query("SELECT month, id, firstName, lastName, COUNT(customerNum) 
FROM project.customer LEFT JOIN project.orders on customer.id=orders.customerNum 
GROUP BY month;");

echo "<table><th>";

//Need speical column names

	echo "<td>";
	print "Month";
	echo "</td>";
	
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
	print $data["month"];
	echo "</td>";
	
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
	print $data["COUNT(customerNum)"];
	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";

?>


</body>
</html>