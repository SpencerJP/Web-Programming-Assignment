<?php
	
	if ( isset($_POST['deleteFromCart']) ) { 
 		 $which=$_POST['deleteFromCart'];
  		removeFromCart($which);
	}

	if (isset($_POST['makeBooking'])) {
		$movie = $_POST['movie'];
		$date = (float)$_POST['day'];
		$sessiontime = $_POST['time'];
		$seats = Array();
		$seats['SA'] = $_POST['SA'];
		$seats['SP'] = $_POST['SP'];
		$seats['SC'] = $_POST['SC'];
		$seats['FA'] = $_POST['FA'];
		$seats['FC'] = $_POST['FC'];
		$seats['B1'] = $_POST['B1'];
		$seats['B2'] = $_POST['B2'];
		$seats['B3'] = $_POST['B3'];
		$price = calculatePrice($seats, $date);
		foreach($seats as $k=>$v) {
			if ($v == 0) {
				unset($seats[$k]);
			}
		}
		addToCart($movie, $date, $price, $sessiontime, $seats);

	}

	if (isset($_POST['firstname'])) {
		checkOut($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['emailaddress']);
		unset($_POST['firstname']);
	}
	function addToCart($movie, $date, $price, $sessiontime, $seats /* seats is an array */) {
		$_SESSION['cart'][$movie]['date'] = $date; 
		$_SESSION['cart'][$movie]['sessiontime'] = $sessiontime;
		$_SESSION['cart'][$movie]['price'] = $price;
		$_SESSION['cart'][$movie]['seats'] = $seats;
	}

	function removeFromCart($movie) {
		unset($_SESSION['cart'][$movie]);
	}

	function checkOut($firstname, $lastname, $phone, $email) {
		if (!isset($_SESSION['cart'])) { return; }
		unset($_SESSION['receipt']);
		$arr = Array("firstname" => $firstname, "lastname" => $lastname, "phone" => $phone, "email" => $email, "cart" => $_SESSION['cart'] );
		$sum = 0;
		foreach($_SESSION['cart'] as $k=>$v) {
			foreach($_SESSION['cart'][$k] as $k2=>$v2) {
					if ($k2 == "price") {
						$sum = $sum + (float)$v2;
					}
			}
		}
		writeReservations($arr);
		$_SESSION['receipt'] = Array("firstname" => $firstname, "lastname" => $lastname, "phone" => $phone, "email" => $email, "cart" => $_SESSION['cart'], "sum" => $sum );
		unset($_SESSION['cart']);
	}
	$pricelookup1 = Array("SA" => 12, "SP" => 10, "SC" => 8, "FA" => 25, "FC" => 20, "B1" => 20, "B2" => 20, "B3" => 20);
	$pricelookup2 = Array("SA" => 18, "SP" => 15, "SC" => 12, "FA" => 30, "FC" => 25, "B1" => 30, "B2" => 30, "B3" => 30);
	function calculatePrice($seats,$time) {
		$pricelookup1 = Array("SA" => 12, "SP" => 10, "SC" => 8, "FA" => 25, "FC" => 20, "B1" => 20, "B2" => 20, "B3" => 20);
		$pricelookup2 = Array("SA" => 18, "SP" => 15, "SC" => 12, "FA" => 30, "FC" => 25, "B1" => 30, "B2" => 30, "B3" => 30);
		if (date("l", $time) == "Monday" || date("l", $time) == "Tuesday" ) {
			$price = 0;
			foreach($seats as $k=>$v) {
				$price = $price + ($v * $pricelookup1[$k]);
			}
			return $price;
		}
		else
		{
			$price = 0;
			foreach($seats as $k=>$v) {
				$price = $price + ($v * $pricelookup2[$k]);
			}
			return $price;
		}
	}
?> 