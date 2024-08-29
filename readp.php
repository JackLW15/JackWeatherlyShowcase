<html>
<body>
<p></p>
<h2>Products List</h2>
<p></p>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

$res = $dbh->query("SELECT * FROM project.product");

echo "<table><th>";
$columns = $dbh->query("DESCRIBE project.product");
while($col = $columns->fetch()){
	echo "<td>";
	print $col["Field"];
	echo "</td>";
}

echo "</th><tr>";

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