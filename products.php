<h2>TOP products</h2>
<?php
// opens the file that will display the top 5 most ordered products
	require_once('highps.php');
?>
<p></p>

<?php
// displays the products table
	require_once('readp.php');
?>
<?php
// link to head to  the orders file/page
?>
<a href="orders.php"><h5>See something you like order it here </h5></a>
<p></p>
<h3>New Product:</h3>

<form action="insertp.php" method="post">
	<p><input type="text" name="productName" placeholder="Product Name"><p>
	<p><input type="text" name="listPrice" placeholder="List Price"><p>
	<p><input type="text" name="unitPrice" placeholder="Unit Price"><p>
	<p><input type="text" name="stock" placeholder="Stock"><p>

	<p><input type="submit" value="Submit"></p>
</form>

<p></p>

<h3>Update Product info:</h3>

<form action="updatep.php" method="post">
	<p><input type="text" name="id" placeholder="Product id"><p>
	<p><input type="text" name="productName" placeholder="Product Name"><p>
	<p><input type="text" name="listPrice" placeholder="List Price"><p>
	<p><input type="text" name="unitPrice" placeholder="Unit Price"><p>

	<p><input type="submit" value="Update"></p>
</form>

<p></p>
<p></p>
<?php
	require_once('bottom.php');
?>