<?php
// File writing in json
function writeReservations($arr) {
	$file = fopen("reservations.txt", "a") or die("file missing or broken permissions, unable to open");
	$text = json_encode($arr);
	fwrite($file, $text);
	fclose($file);

}

function readReservations()  {
	$file = fopen("reservations.txt", "a") or die("file missing or broken permissions, unable to open");
	$text = fread($file, filesize("reservations.txt"));
	$arr = json_decode($text);
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