<html>
<body>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// The sql code to make the statement correct
$res = $dbh->query("SELECT productName, listPrice,
 unitPrice FROM project.product LEFT JOIN
 project.orders ON product.productNum=orders.productnum 
 GROUP BY orders.productnum ORDER BY COUNT(*) LIMIT 5");

echo "<table><th>";

//Need speical column names
	
	echo "<td>";
	print "product Name";
	echo "</td>";
	
	echo "<td>";
	print "list Price";
	echo "</td>";
	
	echo "<td>";
	print "unitPrice";
	echo "</td>";

echo "</th><tr>";

echo "</th><tr>";
while($data = $res->fetch()){
	echo "<td>";
	
	
	
	echo "<td>";
	print $data["productName"];
	echo "</td>";
	
	echo "<td>";
	print $data["listPrice"];
	echo "</td>";
	
	echo "<td>";
	print $data["unitPrice"];
	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";

?>


</body>
</html>