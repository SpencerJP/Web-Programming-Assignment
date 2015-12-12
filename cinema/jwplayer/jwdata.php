
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="jwplayer.js"></script>
	</head>
	<body>
		<div id="vid"><br />
<b>Notice</b>:  Undefined index: file in <b>C:\xampp\htdocs\cinema\jwplayer\jwdata.php</b> on line <b>7</b><br />
</div>
		<script type="text/javascript">
		    jwplayer("vid").setup({
		        file: document.getElementById("vid").innerHTML.replace(".smil.mp4",".smil"),
		        autostart: true,
      			mute: true
		    });
		    setInterval(function() {
				console.log(jwplayer("vid").getDuration()+""); 
			},500);
		</script>
	</body>
</html>
