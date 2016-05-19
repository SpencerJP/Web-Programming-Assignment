<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Receipt Page</title>
	<?php
	require("init.php");
	?>
</head>
<style>
	table {
    border: 1px solid black;
}


</style>
<body>
	<header>

	</header>
	<table>
		<tr>
			<td>Name:</td>
			<td><?php echo $_SESSION['receipt']['firstname'] . " ";
			echo $_SESSION['receipt']['lastname']; ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $_SESSION['receipt']['email']; ?></td>
			
		</tr>
		<tr>
			<td>Mobile Number:</td>
			<td><?php echo $_SESSION['receipt']['phone']; ?></td>
		</tr>
		<tr>
			<td>Total:</td>
			<td><?php echo $_SESSION['receipt']['sum']; ?></td>
		</tr>
	</table>
	<?php
	foreach($_SESSION['receipt']['cart'] as $k=>$v) {
			foreach($_SESSION['receipt']['cart'][$k]['seats'] as $k2=>$v2) {
				for ($i = 0; $i < (int)$v2; $i++) {
					echo "<table>";
					echo "<tr><td>Silverado</td></tr>";
					echo "<tr><td>Session Time:</td><td>";
					echo $_SESSION['receipt']['cart'][$k]["sessiontime"];

					echo " " . date("l", $_SESSION['receipt']['cart'][$k]["date"]);
					echo "</td></tr>";
					echo "<tr><td>Movie:</td><td>";
					echo getMovieName($k);
					echo "</td></tr><tr><td>Ticket:</td><td>";
					echo getSeatTypeName($k2);
					echo "</td></tr>";

					echo "</table>";
				}	
			}
	}
	?>
	
</body>
</html>