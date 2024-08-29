<html>
<body>
<p></p>
<h2>Monthly count of orders</h2>
<p></p>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// The sql code to make the statement correct to display the count of orders from each month
$res = $dbh->query("SELECT month, COUNT(*) FROM project.orders GROUP By month;");

echo "<table><th>";

//Need speical column names
	echo "<td>";
	print "Month";
	echo "</td>";
	
	
	echo "<td>";
	print "Orders for the month";
	echo "</td>";
	

echo "</th><tr>";

while($data = $res->fetch()){
	echo "<td>";
	
	echo "<td>";
	print $data["month"];
	echo "</td>";
	
	echo "<td>";
	print $data["COUNT(*)"];
	echo "</td>";
	echo "</tr>";
	
}
echo "</table>";

?>


</body>
</html>