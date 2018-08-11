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
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	</head>
	<body class="bacImage">
		<header class="homePage">
			<div class="headOverlay">
				<center><h1 class="headText">Advanced Web Technology</h1></center>
			</div>
		</header>
		<?php include('include/headbar.php') ?>
<section class="mainPage">
	<p style="color:black;">
		This is a section
		<article><p>This is my article</p></article>
	</p>
</section>
<aside>
	<p>Then this is aside</p>
</aside>

</body>
</html>
<?php 
}
?>