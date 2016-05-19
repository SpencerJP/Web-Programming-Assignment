 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Cart</title>
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
	<div class="content">
	<?php
	if (array_key_exists('cart', $_SESSION)) {
		echo "<form action=\"cart\" method=\"POST\"><table style=\"width:35%\">";
		foreach ($_SESSION['cart'] as $k=>$v) {
			echo "<tr><th>";
			$mvename = getMovieName($k);
			echo "${mvename} <button type='submit' name='deleteFromCart' value='$k'>Delete From Cart</button>";
			echo "<table>";
			echo "<tr><th>Session Time:</th><td>";
			echo date("l", (float)$v['date']);
			echo " ";
			echo $v['sessiontime'];
			echo "</td></tr>";
			echo "<tr>";
			echo "<th rowspan=\"";
			echo count($v['seats']);
			echo "\">Ticket Type:</th>";
			foreach($v['seats'] as $k2=>$v2) {
				echo "<td>${v2} ";
				echo str_repeat('&nbsp;', 1);
				echo getSeatTypeName($k2);
				echo "</td></tr><tr>";
			}
			echo "</tr>";
			echo "<tr><th>Price: </th>";
			echo "<td>";
			echo formatPrice($v['price']);
			echo "</td>";
			echo "</table>";
			echo "</th></tr>";

		}

		echo "</form><a href=\"checkout.php\">Checkout</a>";
	}
	else {
		echo "<p>No items in cart! You should make a <a href=\"booking.php\">booking</a>!</p>"; // Dom need you to CSS this, can barely see it
	}
	/*
	<!--
	<table style="width:35%">
		<tr>
			<th>Batman VS Superman               <a href="https://jupiter.csit.rmit.edu.au/~s3539519/wp2/cart.php?comm=delete&movie=bvs">Delete From Cart</a>
				<table>
					<tr>
						<th>Session Time:</th>
						<td>Friday, 9:30pm</td>
					</tr>
					<tr>
						<th rowspan="2">Ticket Type:</th>
						<td>2 Adult</td>
						
					</tr>
					<tr>
						<td>2 Concession</td>
					</tr>
					<tr>
						<th>Price:</th>
						<td>$35.99</td>
					</tr>
				</table>
			</th>

		</tr>
		
		
	</table> -->*/
	?>
	</div>
	<footer>
	  	<?php

			require_once("footer-view.php");
			echo "${footer}";

	 		include_once("/home/eh1/e54061/public_html/wp/debug.php");
	 	?>
	</footer>
 	
 </body>
 </html>