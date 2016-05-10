<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<header>
		<h1><center>Silverado Cinema's</center></h1>
		<?php
			session_start();
		?>
	</header>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="booking.php">Booking</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

	</nav>

	<div class = "content">
		
		<form method='post' action='checkout.php' id="cartform">

    		<table>
    			<tr>
	    			<td>
	    				10 CloverField Lane <a href="cart.php?type=remove;name=cloverfield">Remove from Cart</a>
	    			</td>
    			</tr>
    			<tr>
	    			<td>
	    				Batman vs Superman <a href="cart.php?type=remove;name=bvs">Remove from Cart</a>
	    			</td>
    			</tr>
    		</table>


			<button type="submit" form="cartform" value="Submit">Checkout</button>

		</form>
		
	</div>

	<footer>
	  	<p>This website was created for the use of RMIT assignment 2, Web Programming.</p>
	 	<p>Dominic Alvaro & Spencer Porteous</p>
	 	<p>S3542846 & S3539519</p>
	 	<p>Copyight 2016</p>


	 	<?php include_once("/home/eh1/e54061/public_html/wp/debug.php") ?>
	</footer>

</body>
</html>