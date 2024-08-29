<html>
<body>
<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

$res = $dbh->query("SELECT * FROM project.orders");

echo "<table><th>";
$columns = $dbh->query("DESCRIBE project.orders");
while($col = $columns->fetch()){
	echo "<td>";
	print $col["Field"];
	echo "</td>";

}

echo "</th><tr>";

while($data = $res->fetch()){
	echo "<td>";
	
	echo "<td>";
	print $data["receiptNum"];
	echo "</td>";
	
	echo "<td>";
	$id=$data["customerNum"];
	?>
	<a href ="readc.php/" target="_blank">
	<?php
	print $id
	?></a><?php
	echo "</td>";
	
	echo "<td>";
	$pid=$data["productNum"];
	?>
	<a href ="readp.php/" target="_blank">
	<?php
	print $pid
	?></a><?php
	echo "</td>";
	
	echo "<td>";
	print $data["month"];
	echo "</td>";
	
	echo "<td>";
	print $data["day"];
	echo "</td>";
	
	echo "<td>";
	print $data["quantity"];
	echo "</td>";
	echo "</tr>";
	
	
}
echo "</table>";

?>

</body>
</html>