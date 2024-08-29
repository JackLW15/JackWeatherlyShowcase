<html>
<body>
<p></p>
<h2>Products sorted by price</h2>
<p></p>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// The sql code to make the statement correct
$res = $dbh->query("SELECT * FROM project.product ORDER BY unitPrice ASC");

echo "<table><th>";

// getts the column names to be displayed
$columns = $dbh->query("DESCRIBE project.product");
while($col = $columns->fetch()){
	echo "<td>";
	print $col["Field"];
	echo "</td>";
}

echo "</th><tr>";

// prints out the data in each column of the table
while($data = $res->fetch()){
	echo "<td>";
	
	echo "<td>";
	print $data["productnum"];
	echo "</td>";
	
	
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