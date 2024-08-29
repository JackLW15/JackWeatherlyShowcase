<html>
<body>
<h1>Customers:</h1>
<p></p>
<?php
// Calls the database
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");
// SQL code so the program knows what it's pulling. Also it just needs the database.table
$res = $dbh->query("SELECT * FROM project.customer");

echo "<table><th>";
// This creates the Column names by pulling the from the table
$columns = $dbh->query("DESCRIBE project.customer");
while($col = $columns->fetch()){
	echo "<td>";
	print $col["Field"];
	echo "</td>";

}

echo "</th><tr>";
// Loop to pull all the information from the table.
while($data = $res->fetch()){
	echo "<td>";
	
	echo "<td>";
	// needs to mathch what the column name is.
	print $data["id"];
	echo "</td>";
	
	echo "<td>";
	print $data["firstName"];
	echo "</td>";
	
	echo "<td>";
	print $data["lastName"];
	echo "</td>";
	
	echo "<td>";
	print $data["email"];
	echo "</td>";
	echo "</tr>";
	
	
}
echo "</table>";

?>

</body>
</html>