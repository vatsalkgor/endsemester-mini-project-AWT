<?php 
session_start();
if(isset($_SESSION['username'])){
	header('location:AWT_Home.php');
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>AWT|Login User</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/myCss.css">
		<style type="text/css">
		.homePage{
			background-image: url(imgs_vids/web-technologies.jpg);
			margin:150px;
			width: 500px;
			height: 500px;
			color: rgba(0,0,0,2);
			font-family: verdana;
		}
		.headOverlay{
			background-color: rgba(0,0,0,0.4);
			position: relative;
			color: white;
			margin: 0px;
			width: 100%;
			height: 400px;
		}
		.loginText{
			margin-top: 100px;
		}
		td.logintd{
			padding-top: 20px;
		}
		input.transparent{
			background-color: rgba(255,255,255,0.4);
			padding:5px 0px 5px 0px;
			color: black;	
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

	</style>
</head>
<body class="bacImage">
	<center>
		<div class="homePage">
			<center>
				<div class="headOverlay">
					<div class="loginText">
						<table>
							<form method="post" action="loginPageSubmit.php">
								<tr>
									<td class="logintd">
										User Name :
									</td>
									<td class="logintd"> 
										<input type="text" name="username" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Password:
									</td>
									<td class="logintd"> 
										<input type="password" name="password" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd">
										<center>
											<input type="submit" name="submit" value="Login" class="button">
										</center>
									</td>
								</form>
								<td class="logintd">
									<center>
										<a href="loginRegister.php"><button name="register" value="Register" class="button">Register</button></a>
									</center>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</center>
		</div>
	</center>
</body>
</html>

<?php } ?>