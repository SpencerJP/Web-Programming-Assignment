 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Cart</title>
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

	<table style="width:35%">
		<tr>
			<th>Cart</th>

		</tr>
		<tr>
			<th>Movie:</th>
			<td>Batman VS Superman</td>
		</tr>
		<tr>
			<th>Session Time:</th>
			<td>Friday, 9:30pm</td>
		</tr>
		<tr>
			<th rowspan="2">Ticket Type:</th>
			<td>2 Adult</td>
			
		</tr>
		<tr>
			<td>2 Conession</td>
		</tr>
		<tr>
			<th>Price:</th>
			<td>$35.99</td>
		</tr>
		
	</table>
	<button type="button" onclick="alert('Will take you to checkout page where details are entered and checkedout')">CHECKOUT</button>
	
 	
 </body>
 </html>