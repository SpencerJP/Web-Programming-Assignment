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

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="booking.php">Booking</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

	</nav>

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
	  	<p>This website was created for the use of RMIT assignment 1, Web Programming.</p>
	 	<p>Dominic Alvaro</p>
	 	<p>S3542846</p>
	 	<p>CopyRight 2016</p>
	</footer>

</body>
</html>