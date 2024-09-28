<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>

	<a href="unset.php">Logout</a>

	<h2>
	<?php
		if(isset($_SESSION['firstName'])) {
			echo "<h2>User Logged In: </h2>", $_SESSION['firstName'];
		}

		if(isset($_SESSION['password'])) {
			echo "<h2>Password: </h2>", $_SESSION['password'];
		}
	?>
	</h2>
</body>
</html>