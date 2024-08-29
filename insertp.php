<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

	
$Name = $_POST['productName'];
$list = $_POST['listPrice'];
$unit = $_POST['unitPrice'];

$sql = "INSERT INTO project.product (productName, listPrice, unitPrice) VALUES (:name, :list, :unit)";


$pdoQ = $dbh->prepare($sql);
$pdoExc = $pdoQ->execute(array(":name"=>$Name, ":list"=>$list, ":unit"=>$unit));




/*
$res = $dbh->query($sql);
*/
require('products.php');

?>

