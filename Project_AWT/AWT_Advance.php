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
		<title>AWT|Advance</title>
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
					<h1 class="headText" style="padding:7px 7px;">Advance</h1>
				</center>
			</header>
			<?php include('include/headbar.php') ?>
			<canvas id="can"></canvas>
			<script type="text/javascript" src="js/cssjs.js"></script>
			<script type="text/javascript" src="js/heart.js"></script>
		</body>
		</html>
		<?php 
	}
	?>