<!DOCTYPE html>
<html>
<head>
	<title>AWT|Register User</title>
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
		margin-top: 0px;
	}
	td.logintd{
		padding-top: 20px;
	}
	input.transparent{
		background-color: rgba(255,255,255,0.4);
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

</style>
</head>
<body class="bacImage">
	<center>
		<div class="homePage">
			<center>
				<div class="headOverlay">
					<div class="loginText">
						<table style="display: inline;">
							<form method="post" action="loginRegisterSubmit.php">
								<tr>
									<th colspan="2">
										<h2>Register Here</h2>
									</th>
								</tr>
								<tr>
									<td class="logintd">
										First Name :
									</td>
									<td class="logintd"> 
										<input type="text" name="firstname" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Last Name :
									</td>
									<td class="logintd"> 
										<input type="text" name="lastname" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Email :
									</td>
									<td class="logintd"> 
										<input type="email" name="email" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Mobile No. :
									</td>
									<td class="logintd"> 
										<input type="text" name="mobile" class="transparent" pattern="\d{10}" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Username: 
									</td>
									<td class="logintd"> 
										<input type="text" name="username" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Password
									</td>
									<td class="logintd"> 
										<input type="password" name="password" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Confirm Password: 
									</td>
									<td class="logintd"> 
										<input type="password" name="c_pass" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd">
										<center>
											<input style="display: inline-block;" type="submit" name="register" value="Submit" class="button">
										</center>
									</td>
							</form>
								<td class="logintd">
									<center>
										<a href="index.php"><button style="display: inline-block;" name="login" value="Login" class="button">Login</button></a>
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