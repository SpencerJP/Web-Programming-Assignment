<?php
// File writing in json
	
	
	function writeReservations($arr) {
		$currentfile = fopen("reservations.txt", "r") or die("file missing or broken permissions, unable to open");
		$json = json_decode(fread($currentfile, filesize("reservations.txt") ), true);
		array_push($json, $arr);
		$file = fopen("reservations.txt", "w") or die("file missing or broken permissions, unable to open");
		
		$text = json_encode($json);
		fwrite($file, $text);
		fclose($file);
	}

	function readReservations()  {
		$file = fopen("reservations.txt", "r") or die("file missing or broken permissions, unable to open");
		$text = fread($file, (filesize("reservations.txt") or die("file is empty")));
		echo $text;
		$arr = json_decode($text, true);
		fclose($file);
		return $arr;
	}

	function testFileWriting($str) {
		$arr = Array(1 => $str, "testkey" => "testvalue");
		var_dump($arr);
		writeReservations($arr);
		print "test complete";
	}
?>