<?php
	session_start();


	require("file_operations.php");
	require("cart_operations.php");

	function getMovieName($str) {
		switch ($str) {
			case "bvs":
				return "Batman V Superman: Dawn of Justice";
			case "bfgw":
				return "My Big Fat Greek Wedding 2";
			case "cloverfield":
				return "11 Cloverfield Lane";
			default:
				return $str;

		}
	}

	function formatPrice($num) {
		$returnval = "$" . number_format($num, 2);
		return $returnval;
	}

	function getSeatTypeName($str) {
		switch($str) {
			case "SA":
				return "Standard Adult";
			case "SP":
				return "Standard Concession";
			case "SC":
				return "Standard Child";
			case "FA":
				return "First Class Adult";
			case "FC":
				return "First Class Child";
			case "B1":
				return "Beanbag (1 Adult 2 Children)";
			case "B2":
				return "Beanbag (2 Adults)";
			case "B3":
				return "Beanbag (3 Children)";
			default:
				return "Spence fucked up";

		}
	}
	$staticdaylookup = Array("Today" => 0, "Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7);
	function getSecondsTillDay($strday) {
		$strday = $staticdaylookup[$strday];
		$time = $staticdaylookup[date("l",time())];
		if ($strday == 0) { return 0; }
		return (86400 * ($strday - $time));
	}
?>