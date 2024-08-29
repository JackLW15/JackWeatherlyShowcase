<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

	
$custNum = $_POST['customerNum'];
$prodNum = $_POST['productNum'];
$month = $_POST['month'];
$day = $_POST['day'];
$amount = $_POST['amount'];

$sql = "INSERT INTO project.orders (customerNum, productNum, month, day, quantity) VALUES (:cn, :pn, :m, :d, :q)";

$pdoQ = $dbh->prepare($sql);
$pdoExc = $pdoQ->execute(array(":cn"=>$custNum, ":pn"=>$prodNum, ":m"=>$month, ":d"=>$day, ":q"=>$amount));



require('orders.php');

?>

