<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>
	<link rel="stylesheet" href="main.css">
	<?php
		require("init.php");
	?>
</head>
<body>
	
	<header>
		<h1><center>Silverado Cinema's</center></h1>
	
	</header>
	
	<?php
			require_once("nav-view.php");
			echo "${nav}";
	?>
	

	<div class= "content">

	<form action="receipt.php" method="post">
	<p>First Name</p><br>
	  <input type="text" name="firstname" required><br>
	  
	  <p>Last Name</p><br>
	  <input type="text" name="lastname" pattern="[a-zA-Z0\s]+"  required>

	  <p>Email</p><br>
	  <input type="email" name="emailaddress" required>

	  <p>Number</p><br>
	  <input type="number" name="phone" pattern="04+[0-9]{8}" required>
	  <br>

	  <input type="submit" value="Submit" name="checkOut">  	
	</form>

	</div>

	<footer>
	  	<?php

			require_once("footer-view.php");
			echo "${footer}";

	 		include_once("/home/eh1/e54061/public_html/wp/debug.php")
	 	?>
	</footer>
	
</body>
</html>