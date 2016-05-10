
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookings</title>
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

		<form method='post' action='http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php'>
			<P>Movie</P>
			<select name="movie">
		        <option value="batman">Superman VS Batman</option>
		        <option value="Movie">10 Cloverfield Lane</option>
		        <option value="Movie">Wedding Crashes</option>
		    </select>
		    <br>

		    <P>Day</P>
			<select name="day">
		        <option value="Monday">Monday</option>
		        <option value="Tuesday">Tuesday</option>
		        <option value="Wednsday">Wednsday</option>
		        <option value="Thursday">Thursday</option>
		    </select>
		    <br>

		    <P>Booking</P>
			<select name="time">
		        <option value="nine">9am</option>
		        <option value="twelve">12am</option>
		        <option value="four">4pm</option>
		        <option value="eight">8pm</option>
		    </select>
		    <br>
		    <p>Ticket Type</p>


		    <div class="flex-container">
		  		<div class="flex-item">
		  			
		  			<p>Adult</p>
					<select name="SA">
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Concession</p>
					<select name="SP">
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Child</p>
					<select name="SC">
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
					<select name="FA">
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>First Class Child</p>
					<select name="FC">
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Beanbag 1 person</p>
					<select name="B1">
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
					<select name="B2">
						<option value="0">0</option>
				        <option value="1">1</option>s
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Beanbag 3 person</p>
					<select name="B3">
						<option value="0">0</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
		    		</select>
		    		<br>

		    		<p>Total: $0.00</p>	
		    		<input type="submit" value="Submit" name="price">  			
		  		</div>
			</div>

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