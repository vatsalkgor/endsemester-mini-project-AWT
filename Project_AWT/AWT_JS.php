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
		<title>AWT|Advanced JS</title>
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
		<style type="text/css">
		input.transparent{
			background-color: rgba(255,255,255,0.4);
			color: black;
			padding:5px 0px 5px 0px;
			border: none;
		}
		.button{
			padding: 10px;
			color: white;
			font-family: verdana;
			background-color: rgba(255,99,71,1);
			border-radius: 4px;
			border: none;
		}
		.button:hover{
			background-color: rgba(255,80,50,1);
			cursor: pointer;
		}
		#myContainer {
			width: 400px;
			height: 400px;
			position: relative;
			background: yellow;
		}
		#myAnimation {
			width: 50px;
			height: 50px;
			position: absolute;
			background-color: red;
		}
	</style>
</head>
<body class="bacImage"> 
	<header class="homePage">
		<div class="headOverlay">
			<center>
				<h1 class="headText" style="padding:7px 7px;">Advanced JS</h1>
			</center>
		</header>
		<?php include('include/headbar.php') ?>
		<div style="display:inline;">
			<section class="html5">
				<a href="#" class='html5' id="pract11">Practicle 11</a>
				<a href="#" class="html5" id="pract12">Practicle 12</a>
				<a href="#" class="html5" id="pract13">Practicle 13</a>
			</section>
			<div class="containerDiv">
				<center>
					<div id="validation" class="practicles" style="display: none;">
						<div>
							<form name="myForm" onsubmit="return validateForm()">
								Name: 
								<input type="text" name="fname">
								<br>
								<br>
								Email: 
								<input type="text" name="email"><br><br>
								<input class="button" type="submit" value="Submit">
							</form>
							<script>
								function validateForm() {
									var x = document.forms["myForm"]["fname"].value;
									if (x == "") {
										alert("Name must be filled out");
										return false;
									}
									var email=document.forms['myForm']['email'].value;

									var atpos=x.indexOf("@");

									var dotpos=x.lastIndexOf(".");

									if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

									{
										alert("Please enter a valid email address.");
										return false;
									}
								}
							</script>
						</div>
					</div>
				</center>
				<center>
					<div id="errorHandling" class="practicles" style="display: none;">
						<div>
							Enter Numbers only... 
							<input type="text" id="error">
							<button class="button" onclick="test()">Check</button>
							<p id="res"></p>
						</div>
					</div>
				</center>
				<center>
					<div id="animation" class="practicles"  style="display: none;">
						<div>
							<p>
								<button class="button" onclick="myMove()">Click Me</button> 
							</p>
							<div id ="myContainer">
								<div id ="myAnimation"></div>
							</div>
							<script>
								function myMove() {
									var elem = document.getElementById("myAnimation");   
									var pos = 0;
									var id = setInterval(frame, 10);
									function frame() {
										if (pos == 350) {
											clearInterval(id);
										} else {
											pos++; 
											elem.style.top = pos + 'px'; 
											elem.style.left = pos + 'px'; 
										}
									}
								}
							</script>
						</div>
					</div>
				</center>
			</div>
		</div>
		<script type="text/javascript" src="js/js.js"></script>
		<script type="text/javascript">
			function test() {
				var message, x, f = 0;
				message = document.getElementById("res");
				message.innerHTML = "";
				x = document.getElementById("error").value;
				try { 
					if(x == "") throw "empty.";
					if(isNaN(x)) throw "not a number.";
					x = Number(x);
					if(x < 0) throw "negative.";
					if(x > 100000) throw "too high.";
				}
				catch(err) {
					f = 1;
					message.innerHTML = "Input is " + err;
				}
				if(f == 0){
					message.innerHTML = "No Error... Enjoy... :)";
				}
			}
		</script>			
	</body>
	</html>
	<?php 
}
?>