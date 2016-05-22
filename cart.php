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
			//echo "<tr><th>";
			$mvename = getMovieName($k);
			echo "<p class=\"moviep\">${mvename}</p> <button type='submit' name='deleteFromCart' value='$k'>Delete From Cart</button>";
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
		echo "<br>";

		echo "</form><a class=\"buttoncheck\" href=\"checkout.php\">Checkout</a>";
		//echo "<button type='submit' href='\"checkout.php\"'>Checkout</button>";
	}
	else {
		echo "<p>No items in cart! You should make a <a class=\"bookingp\" href=\"booking.php\">Booking</a>!</p>"; // a class= not sure if works will have to check off spencers comp
	}
	
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