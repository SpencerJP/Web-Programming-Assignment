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

	</header>

	<?php
			require_once("nav-view.php");
			echo "${nav}";
	?>

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
	  	<?php

			require_once("footer-view.php");
			echo "${footer}";

	 		include_once("/home/eh1/e54061/public_html/wp/debug.php")
	 	?>
	</footer>

</body>
</html>