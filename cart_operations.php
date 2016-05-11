<?php
	function addToCart($movie, $date, $session, $seats /* seats is an array */) {

	}

	function checkOut() {
		writeReservations($_SESSION[user]['cart']);
	}
?>