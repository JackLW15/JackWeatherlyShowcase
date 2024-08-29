 <?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

// Getts what is in the textboxs and assigns to a variable
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

// SQL code to insert the new information.  Because it's for only one customer we need to know the id for the WHERE to run.
$sql = "UPDATE project.customer SET firstName=:fn, lastName=:ln, email=:email WHERE id=$id";

$pdoQ = $dbh->prepare($sql);
$pdoExc = $pdoQ->execute(array(":fn"=>$firstName, ":ln"=>$lastName, ":email"=>$email));


// goes back to the customer file/page.
require('customer.php');
?>


