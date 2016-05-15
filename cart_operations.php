<?php
	function addToCart($sess, $movie, $date, $price, $sessiontime, $seats /* seats is an array */) {
		$details = Array();		/*	array_push($_SESSION['cart'], var)*/
	}

	function checkOut() {
		writeReservations($_SESSION['cart']);
	}
?>