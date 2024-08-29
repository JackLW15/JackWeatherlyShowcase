 <?php
$dbh = new PDO("mysql:localhost;dbname=project",
"root",
"");

$id = $_POST['id'];
$Name = $_POST['productName'];
$list = $_POST['listPrice'];
$unit = $_POST['unitPrice'];
$stock = $_POST['stock'];

$sql = "UPDATE project.product SET productName=:name, listPrice=:list, unitPrice=:unit, stock=:st WHERE productnum=$id";

$pdoQ = $dbh->prepare($sql);

$pdoExc = $pdoQ->execute(array(":name"=>$Name, ":list"=>$list, ":unit"=>$unit, ":st"=>$stock));


require('products.php');

?>


