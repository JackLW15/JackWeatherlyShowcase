<?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// Getts what is in the textboxs and assigns to a variable
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

// SQL code to insert the new information. And because the customer id is auto increasing no need to worry about with this command
$sql = "INSERT INTO project.customer (firstName, lastName, email) VALUES (:fn, :ln, :email)";

$pdoQ = $dbh->prepare($sql);
// moves the infomation from the variables into a array so it can be safly added into the database
$pdoExc = $pdoQ->execute(array(":fn"=>$firstName, ":ln"=>$lastName, ":email"=>$email));

// goes back to the customer file.
require('customer.php');

?>

