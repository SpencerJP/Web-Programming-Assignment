 var moviefields_json;
var once = 0;
 var d = new Date();
var weekday = new Array(7);
weekday[0]=  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
var pricelookup1 = {
	SA: 12,
	SP: 10,
	SC: 8,
	FA: 25,
	FC: 20,
	B1: 20,
	B2: 20,
	B3: 20
}
var pricelookup2 = {
	SA: 18,
	SP: 15,
	SC: 12,
	FA: 30,
	FC: 25,
	B1: 30,
	B2: 30,
	B3: 30
}

var n = weekday[d.getDay()];

 function changeMovieVal(val) {
 	var x = document.getElementById("movie_days");
 	var y = document.getElementById("movie_times");
 	var i;



 	for (i = 0; i < x.length; i++) {
 		console.log(i);
 		x.remove(i);
 	}
 	for (var k in moviefields_json[val]) {
 		var option = document.createElement("option");
 		console.log(k)
		option.text = k;
		option.value = g_timetilldayunix[k]; 

		x.add(option);
 	}
 }

 function changeDayVal(val) {
 	var x = document.getElementById("movie_times");
 	var y = document.getElementById("movie_options").value;
 	console.log(y);
 	console.log(val);
 	val = new Date(1000*val);
 	val = weekday[val.getDay()];
 	console.log(moviefields_json[y][val][0]);
 	var i;

 	for (i = 0; i < x.length; i++) {
 		x.remove(i);
 	}
 	if (val == "Today") {
 		for (i = 1; i < moviefields_json[y][n][0]; i++) {
 			var option = document.createElement("option");
			option.text = moviefields_json[y][n][i];
			x.add(option);
 		}

 	}
 	else {

	 	for (i = 1; i < moviefields_json[y][val][0]; i++) {
 			var option = document.createElement("option");
			option.text = moviefields_json[y][val][i];
			x.add(option);
 		}
	}
 }

 function changePrice() {
 	var sum = 0.00;
 	var i;
 	var sa = parseInt(document.getElementById("SA").value);
 	var sp = parseInt(document.getElementById("SP").value);
 	var sc = parseInt(document.getElementById("SC").value);
 	var fa = parseInt(document.getElementById("FA").value);
 	var fc = parseInt(document.getElementById("FC").value);
 	var b1 = parseInt(document.getElementById("B1").value);
 	var b2 = parseInt(document.getElementById("B2").value);
 	var b3 = parseInt(document.getElementById("B3").value);
 	if (n == "Monday" || n == "Tuesday") {
 		for (i = 0;i < sa;i++) {
 			sum = sum + pricelookup1["SA"];
 		}
 		for (i = 0;i < sp;i++) {
 			sum = sum + pricelookup1["SP"];
 		}
 		for (i = 0;i < sc;i++) {
 			sum = sum + pricelookup1["SC"];
 		}
 		for (i = 0;i < fa;i++) {
 			sum = sum + pricelookup1["FA"];
 		}
 		for (i = 0;i < fc;i++) {
 			sum = sum + pricelookup1["FC"];
 		}
 		for (i = 0;i < b1;i++) {
 			sum = sum + pricelookup1["B1"];
 		}
 		for (i = 0;i < b2;i++) {
 			sum = sum + pricelookup1["B2"];
 		}
 		for (i = 0;i < b3;i++) {
 			sum = sum + pricelookup1["B3"];
 		}

 	}
 	else {
 		for (i = 0;i < sa;i++) {
 			sum = sum + pricelookup2["SA"];
 		}
 		for (i = 0;i < sp;i++) {
 			sum = sum + pricelookup2["SP"];
 		}
 		for (i = 0;i < sc;i++) {
 			sum = sum + pricelookup2["SC"];
 		}
 		for (i = 0;i < fa;i++) {
 			sum = sum + pricelookup2["FA"];
 		}
 		for (i = 0;i < fc;i++) {
 			sum = sum + pricelookup2["FC"];
 		}
 		for (i = 0;i < b1;i++) {
 			sum = sum + pricelookup2["B1"];
 		}
 		for (i = 0;i < b2;i++) {
 			sum = sum + pricelookup2["B2"];
 		}
 		for (i = 0;i < b3;i++) {
 			sum = sum + pricelookup2["B3"];
 		}
 	}
 	sum.toFixed(2);
 	$("#currentPrice").text("Total: $" + sum);

 }



$(document).ready(function() {
	$.ajax({
		url: "https://jupiter.csit.rmit.edu.au/~s3539519/wp2/movietimes.json",
		dataType: "text",
		success: function(data) {
				moviefields_json = $.parseJSON(data);
				if (once == 0) {
					changeMovieVal("bvs");
					changeDayVal("Monday");
					once = 1;
				}
		}

	});
});