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
		<title>AWT|CSS3</title>
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	</head>
	<body class="bacImage"> 
		<header class="homePage">
			<div class="headOverlay">
				<center>
					<h1 class="headText" style="padding:7px 7px;">CSS3</h1>
				</center>
			</header>
			<?php include('include/headbar.php') ?>
			<div style="display:inline;">
				<section class="html5">
					<a href="#" class='html5' id="pract6">Practicle 6</a>
					<a href="#" class="html5" id="pract7">Practicle 7</a>
					<a href="#" class="html5" id="pract8">Practicle 8</a>
					<a href="#" class="html5" id="pract9">Practicle 9</a>
					<a href="#" class="html5" id="pract10">Practicle 10</a>
				</section>
				<div class="containerDiv">
					<center>
						<div id="transitionDiv" class="practicles" style="display: none;">
							<div id="transition"></div>
						</div>
					</center>
					<center>
						<div id="linearGradient" class="practicles" style="display: none;">
							<div id="grad1"></div>
						</div>
					</center>
					<center>
						<div id="textShadow" class="practicles"  style="display: none;">
							<h1 id="shad1">Text Shadow effect!</h1>
						</div>
					</center>
					<center>
						<div id="multipleTransformation" class="practicles" style="display: none;">
							<div id="multiTransform" style="height:250px; width: 500px; background-color: tomato;"></div>
						</div>
					</center>
					<center>
						<div id="animation" class="practicles" style="display: none;">
							<div id="anim"></div>
						</div>
					</center>
				</div>
			</div>
			<script type="text/javascript" src="js/cssjs.js"></script>

		</body>
		</html>
		<?php 
	}
	?>