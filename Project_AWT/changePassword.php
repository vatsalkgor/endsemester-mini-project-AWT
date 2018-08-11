<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:logout.php');
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>AWT|Change password</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="bacImage">
	<center>
		<div class="homePage">
			<center>
				<div class="headOverlay">
					<div class="loginText">
						<table>
							<form id="changePasswordForm">
								<tr>
									<td class="logintd">
										Old Password :
									</td>
									<td class="logintd"> 
										<input type="password" id="oldpassword" name="oldpassword" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										New Password:
									</td>
									<td class="logintd"> 
										<input type="password" id="newpassword" name="newpassword" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Confirm Password:
									</td>
									<td class="logintd"> 
										<input type="password" id="confirmpassword" name="confirmpassword" class="transparent" required>
									</td>
								</tr>
								<tr>
									<td class="logintd">
										<center>
											<button name="submit" id="cpsubmit" class="button">Change</button>
										</center>
									</td>
								</form>
								<td class="logintd">
									<center>
										<a href="AWT_Home.php"><button name="register" value="Register" class="button">Profile</button></a>
									</center>
								</td>
							</tr>
						</table>
						<p id="result"></p>
					</div>
				</div>
			</center>
		</div>
	</center>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form#changePasswordForm').submit(function(e){
				e.preventDefault();
				var op = $('#oldpassword').val();
				var np = $('#newpassword').val();
				var cp = $('#confirmpassword').val();
				$('#result').html('');
				$.ajax({
					url: 'ajax/change_pass.php',
					type: 'post',
					data: {oldpass:op,newpass:np,cpass:cp},
					success: function(data){
						$('#result').append(data);
						$('#oldpassword').html('');
						$('#newpassword').html('');
						$('#confirmpassword').html('');
					}
				})
			})
		})
	</script>
</body>
</html>
<?php } ?>