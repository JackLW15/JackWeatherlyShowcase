<h2>TOP products</h2>
<?php
// displays the top five products sold
	require_once('highps.php');
	// displays the products by lowest price to highest.
	require_once('productsOrderedByPRICE.php');
?>
<p></p>
<p></p>
<h2>Place order</h2>

<form action="inserto.php" method="post">
	<p><input type="text" name="customerNum" placeholder="Customer Number"><p>
	<p><input type="text" name="productNum" placeholder="Product Number"><p>
	<p><input type="text" name="amount" placeholder="Quantity"><p>
	<p><input type="text" name="month" placeholder="Month (ie June)"><p>
	<p><input type="text" name="day" placeholder="Day (ie 1)"><p>
	

	<p><input type="submit" value="Place Order"></p>
</form>


<p></p>
<p></p>
<h2>Orders</h2>
<?php
// displays the order table
require_once('reado.php');
?>

<p></p>
<?php
// button to head to the monthly information page
?>
<a href="month.php">
	<button class="btn btn-primary btn-lg">Monthly Info</button></a>
<p></p>


<p></p>
<?php
	require_once('bottom.php');
?>