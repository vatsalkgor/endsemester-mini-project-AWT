<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:logout.php');
}else{
	$conn = new mysqli('localhost','root','','awt');
	$username = $_SESSION['username'];
	$sql = "select * from users where u_username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>AWT|HTML5</title>
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
		<style type="text/css">
		.button{
			padding: 10px;
			color: white;
			font-family: verdana;
			background-color: rgba(255,99,71,1);
			border-radius: 4px;
			border: none;
		}
	</style>
</head>

<body class="bacImage"> 
	<header class="homePage">
		<div class="headOverlay">
			<center>
				<h1 class="headText" style="padding:7px 7px;">HTML5</h1>
			</center>
		</header>
		<?php include('include/headbar.php') ?>
		<div style="display:inline;">
			<section class="html5">
				<a href="#" class='html5' id="pract2">Practicle 2</a>
				<a href="#" class="html5" id="pract3">Practicle 3</a>
				<a href="#" class="html5" id="pract4">Practicle 4</a>
				<a href="#" class="html5" id="pract5">Practicle 5</a>
			</section>
			<div class="containerDiv">
				<center>
					<div id="AudioVid" class="practicles" style="display:none;">
						<div class="header">
							<h1>This shows the use of &lt;audio&gt; and &lt;video&gt; tags</h1>
						</div>
						<div class="inline">
							<div class="audio">
								<h3>This section illustrates the use of &lt;audio&gt; tag.</h3>
								<audio src="imgs_vids/song.mp3" controls loop="true">
									Audio is not supported.... Please upgrade your browser.
								</audio>
							</div>
							<div class="video">
								<h3>This section illustrates the use of &lt;video&gt; tag.</h3>
								<video controls src="imgs_vids/Captain_America_Civil_War_2016_HDTC_Dubbed_In_Hindi1_by_-IPagal.mp4" autobuffer preload height="100%" width="100%" poster="imgs_vids/Screenshot (13).png">
									Your Browser Doesn't support video tag... Please upgrade your browser.
								</video>
							</div>
						</div>	
					</div>
				</center>
				<center>	
					<div id="canvas" class="practicles" style="display:none">

						<canvas id="canvas1" width="450px" height="300px" style="background-color: rgba(0,0,0,0.6);">
							<script type="text/javascript">
								var can = document.getElementById("canvas1");
								var ctx = can.getContext("2d");
								ctx.font="30px verdana";
								ctx.strokeStyle="yellow";
								ctx.strokeText("This is the use of canvas",50,150);

							</script>
						</canvas>

					</div>
				</center> 	
				<center>
					<div id="Geolocation" class="practicles" style="display: none;font-size: 20px;font-family: verdana;">
						<button class="button" onclick="getLocation()" style="padding: 10px 0px 10px 0px">SeeLocation</button>
						<script>
							var x = document.getElementById("Geolocation");
							function getLocation() {
								if (navigator.geolocation) {
									navigator.geolocation.getCurrentPosition(showPosition);
								} 
								else {
									x.innerHTML = "Geolocation is not supported by this browser.";
								}
							}
							function showPosition(position) {
								x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude; 
							}
						</script>
					</div>
				</center>
				<center>
					<div id="webStorage" class="practicles" style="display: none;font-size: 20px;font-family: verdana;">
						<button class="button" onclick="clickCounter()" style="padding: 10px 0px 10px 0px">clickMe!</button>
						&emsp;
						<button class="button" onclick="resetCounter()" style="padding: 10px 0px 10px 0px">ResetCounter</button>
						<div id="clicks"></div>
						<script>
							function clickCounter() {
								if(typeof(Storage) !== "undefined") {
									if (localStorage.clickcount) {
										localStorage.clickcount = Number(localStorage.clickcount)+1;
									} else {
										localStorage.clickcount = 1;
									}
									document.getElementById("clicks").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
								} else {
									document.getElementById("clicks").innerHTML = "Sorry, your browser does not support web storage...";
								}
							}
							function resetCounter(){
								localStorage.clickcount = 0;
								document.getElementById("clicks").innerHTML="You have clicked the button " + localStorage.clickcount + " time(s).";
							}
						</script>
					</div>
				</center>
			</div>
		</div>
		<script type="text/javascript" src="js/htmljs.js"></script>

	</body>
	</html>
	<?php 
}
?>