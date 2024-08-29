

<?php
// calls the file to display the customer table from the database
	require_once('readc.php');
?>

<?php
// textboxes and a button to send the new information into the database
?>
<p></p>
<h3>New Customer info:</h3>

<form action="insertc.php" method="post">
	<p><input type="text" name="firstName" placeholder="First Name"><p>
	<p><input type="text" name="lastName" placeholder="Last Name"><p>
	<p><input type="text" name="email" placeholder="Email address"><p>

	<p><input type="submit" value="New customer"></p>
</form>

<p></p>
<h3>Update Customer info:</h3>

<form action="updateC.php" method="post">
	<p><input type="text" name="id" placeholder="Customer id"><p>
	<p><input type="text" name="firstName" placeholder="First Name"><p>
	<p><input type="text" name="lastName" placeholder="Last Name"><p>
	<p><input type="text" name="email" placeholder="Email address"><p>

	<p><input type="submit" value="Update"></p>
</form>


<p></p>
<?php
// Calls the bottom file so I don't have to keep the code every I want to use it.
	require_once('bottom.php');
?>
