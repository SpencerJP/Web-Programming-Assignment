<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	
	<header>
		<h1><center>Silverado Cinema's</center></h1>
	
	</header>
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="booking.php">Booking</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="cart.php">Cart</a></li>
			<li><a href="checkout.php">Check Out</a></li>
		</ul>

	</nav>

	<div class= "content">

	<form>
	<p>First Name</p><br>
	  <input type="text" name="firstname" required><br>
	  
	  <p>Last Name</p><br>
	  <input type="text" name="lastname" required>

	  <p>Email</p><br>
	  <input type="email" name="emailaddress" required>

	  <p>Number</p><br>
	  <input type="number" name="quantity" min="7" max="10" required>
	  <br>

	  <input type="submit" value="Submit" name="checkOut">  	
	</form>

	</div>
	
</body>
</html>