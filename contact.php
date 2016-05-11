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
		
		<form method='post' action='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php'>

    		<p>Email</p>

    		<label for="lemail"></label> 
    		<br>
    		<input type="email" id="lname" name="email" required>
    		<br>

    		<P>Subject</P>
			
	        <select name="subject">
	            <option value="General">General Enquiry</option>
	            <option value="Bookings">Corporate Bookings</option>
	            <option value="Complaints">Suggestions and Complaints</option>
	        </select>
	        <br>
	        <p>Message</p>

	        <textarea name="message" rows="10" cols="60" required></textarea>
			<br>

	        <input type="submit" value="Submit">

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