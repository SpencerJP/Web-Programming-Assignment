<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 1</title>
	<link rel="stylesheet" href="main.css">
	<?php
	require("init.php");
	/*
	$bigfatgreek = Array("Friday" => Array("9:00", "12:00", "17:00"), "Sunday" => Array("9:00", "12:00", "17:00") ) ;
	$cloverfield = Array("Tuesday" => Array("16:00", "20:00"), "Wednesday" => Array("18:00", "21:00"));
	$bvs = Array("Monday" => Array("18:00", "21:00"), "Thursday" => Array("19:00"), "Saturday" => Array("16:00", "18:00", "20:00") );
	$movies = Array("GreekWedding" => $bigfatgreek, "Cloverfield" => $cloverfield, "BatmanVSuperman" => $bvs);
	writeReservations($movies);*/

	?>
</head>
<body>
	<header>
		<!-- Original image below sourced for educational purposes: http://cdn.bgr.com/2016/03/batman-v-superman-reviews.jpg -->
		<!-- Original image below sourced for educational purposes: http://www.moustachemagazine.com/wp-content/uploads/2016/03/CLOVERFIELD-LANE.jpg-->
		<!-- Original image below sourced for educational purposes: http://blogs-images.forbes.com/scottmendelson/files/2016/03/greek.png -->
		<h1><center>Silverado Cinema's</center></h1>
	</header>
	<?php
			require_once("nav-view.php");
			echo "${nav}";
	?>
	
	<div class = "content">
		<p>Welcome to the re-opening of Silverado Cinema's with a whole new make over taking your visual and listening experiance to a whole new level. Indcluding features like the all new Dolby Sound System, 3D projection, and comfortbale seats for enhanced viewing perfomance </p>
		<p>Here at Silverado we have always listended to our customers and made sure they came first with anything we did. Our brand new redesign was inspired by out customers feeback in wanting optimal viewing experiance.</p>
		
		
		
		
		<h2>Now Showing movie blockbuster</h2>

		<div class="flex-container">
	  		<div class="flex-item"><img src="superman.jpg">
	  			
				<p> It's been nearly two years since Superman's (Henry Cavill) colossal battle with Zod (Michael Shannon) devastated the city of Metropolis. The loss of life and collateral damage left many feeling angry and helpless, including crime-fighting billionaire Bruce Wayne (Ben Affleck).</p>

	  			

	  		</div>
	  		<div class="flex-item"><img src="clover.jpg">
	  			<p>After surviving a car accident, Michelle (Mary Elizabeth Winstead) wakes up to find herself in an underground bunker with two men. Howard (John Goodman) tells her that a massive chemical attack has rendered the air unbreathable, and their only hope of survival is to remain inside.</p>
	  		</div>

	  		<div class="flex-item"><img src="wedding.jpg">
	  			<p>Parenting and marriage is becoming tougher and tougher for Toula (Nia Vardalos) and her husband Ian. Not only has their relationship lost some of its spark, but they're also dealing with a rebellious teenage daughter who clashes with Greek traditions. On top of that,</p>
	  		</div>


		</div>

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