
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookings</title>
	<link rel="stylesheet" href="main.css">
	<?php
	require("init.php");
	?>
	<script>
			g_timetilldayunix = {
			Monday: <?php echo (time() + getSecondsTillDay("Monday")); ?>,
			Tuesday: <?php echo (time() + getSecondsTillDay("Tuesday")); ?>,
			Wednesday: <?php echo (time() + getSecondsTillDay("Wednesday")); ?>,
			Thursday: <?php echo (time() + getSecondsTillDay("Thursday")); ?>,
			Friday: <?php echo (time() + getSecondsTillDay("Friday")); ?>,
			Saturday: <?php echo (time() + getSecondsTillDay("Saturday")); ?>,
			Sunday: <?php echo (time() + getSecondsTillDay("Sunday")); ?>,
			Today: <?php echo (time() + getSecondsTillDay("Today")); ?>
			} </script>
	<script src="bookings.js"></script>
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
		<h2>Feel free to browse our current movies that are showing and book online</h2>

		<table style="width:50%">
		  <tr>
		    <th>Price List</th>
		    <th>(Mon-Tues, ALL DAY) and (Mon-Friday,1PM ONLY)</th>		
		    <th>(Wed-Fri,NOT 1PM) and (Sat-Sunday, ALL DAY)</th>
		  </tr>
		  <tr>
		    <td>Standard-Full</td>
		    <td>$12</td>		
		    <td>$18</td>
		  </tr>
		  <tr>
		    <td>Standard-Conc</td>
		    <td>$10</td>		
		    <td>$15</td>
		  </tr>
		  <tr>
		    <td>Standard-Child</td>
		    <td>$8</td>		
		    <td>$12</td>
		  </tr>
		  <tr>
		    <td>First Class-Adult</td>
		    <td>$25</td>		
		    <td>$30</td>
		  </tr>
		  <tr>
		    <td>First Class-Child</td>
		    <td>$20</td>		
		    <td>$25</td>
		  </tr>
		  <tr>
		    <td>Beanbag</td>
		    <td>$20</td>		
		    <td>$30</td>
		  </tr>
		</table>

		<br>

		<table style="width:50%">
		  <tr>
		    <th>Mon - Tues</th>
		    <th>Wed - Fri</th>		
		    <th>Sat - Sun</th>
		  </tr>
		  <tr>
		    <td>1pm - Childrens on Beanbags 3D</td>
		    <td>1pm - Romantic Comedy Couple</td>		
		    <td>12pm - Childrens on Beanbags 3D</td>
		  </tr>
		  <tr>
		    <td>6pm - Art / Foreign</td>
		    <td>6pm - Childrens on beanbags 3D</td>		
		    <td>3pm - Art / Foreign</td>
		  </tr>
		  <tr>
		    <td>9pm - Romantic Comedy Couple</td>
		    <td>9pm - Action 3D</td>		
		    <td>6pm - Romantic Comedy Couple</td>
		  </tr>
		</table>

		<form method='post' action='booking.php'>
			<P>Movie</P>
			<select name="movie" onchange='changeMovieVal(this.value)' id="movie_options">
		        <option value="bvs">Superman VS Batman</option>
		        <option value="cloverfield">10 Cloverfield Lane</option>
		        <option value="bfgw">Big Fat Greek Wedding 2</option>
		    </select>
		    <br>

		    <P>Day</P>
			<select name="day" onchange='changeDayVal(this.value)' id="movie_days">
			
			
		       
		    </select>
		    <br>

		    <P>Booking</P>
			<select name="time" id="movie_times">
		    </select>
		    <br>
		    <p>Ticket Type</p>


		    <div class="flex-container">
		  		<div class="flex-item">
		  			
		  			<p>Adult</p>
					<select name="SA" id="SA" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Concession</p>
					<select name="SP" id="SP" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Child</p>
					<select name="SC" id="SC" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		  		</div>
		  		<div class="flex-item">
		  			<p>First Class Adult</p>
					<select name="FA" id="FA" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>First Class Child</p>
					<select name="FC" id="FC" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Beanbag 1 person</p>
					<select name="B1" id="B1" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		  		</div>
		  		<div class="flex-item">
		  			<p>Beanbag 2 person</p>
					<select name="B2" id="B2" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Beanbag 3 person</p>
					<select name="B3" id="B3" onchange='changePrice()'>
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p id="currentPrice">Total: $0.00</p>	
		    		<input type="submit" value="Submit" name="makeBooking">  			
		  		</div>
			</div>

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