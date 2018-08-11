<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:logout.php');
} 
else{
	$conn = new mysqli('localhost','root','','awt');
	$username = $_SESSION['username'];
	$sql= "select * from users where u_username ='$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AWT|Profile</title>
	<link rel="stylesheet" type="text/css" href="css/myCss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<style type="text/css">
	.homePage{
		background-image: url(imgs_vids/web-technologies.jpg);
		margin:150px;
		width: 500px;
		height: 550px;
		color: rgba(0,0,0,2);
		font-family: verdana;
	}
	.headOverlay{
		background-color: rgba(0,0,0,0.4);
		position: relative;
		color: white;
		margin: 0px;
		width: 100%;
		height: 450px;
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
							<form id="updateProfile" enctype="multipart/form-data">
								<tr>
									<th colspan="2">
										<h2>Profile Details</h2>
									</th>
								</tr>
								<tr>
									<td class="logintd">
										First Name :
									</td>
									<td class="logintd"> 
										<input type="text" name="firstname" id="firstname" class="transparent" readonly value="<?= $row['u_firstname'] ?>">
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Last Name :
									</td>
									<td class="logintd"> 
										<input type="text" name="lastname" id="lastname" class="transparent" readonly value="<?= $row['u_lastname'] ?>">
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Email :
									</td>
									<td class="logintd"> 
										<input type="email" name="email" id="email" class="transparent" readonly value="<?= $row['u_email'] ?>">
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Mobile No. :
									</td>
									<td class="logintd"> 
										<input type="text" name="mobile" id="mobile" class="transparent" pattern="\d{10}" readonly value="<?= $row['u_mobile'] ?>">
									</td>
								</tr>
								<tr>
									<td class="logintd"> 
										Username: 
									</td>
									<td class="logintd"> 
										<input type="text" name="username" class="transparent" readonly value="<?= $row['u_username'] ?>">
									</td>
								</tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr>
									<center>
										<td class="logintd"> 
											Profile Picture 
										</td>
									</center>
									<td>
										<img src="<?php echo $row['u_image'] ?>" style="border-radius: 50%" height="70px" width="70px">
									</td>
								</tr>
								<tr>
									<td></td>
									<td class="logintd"> 
										<input type="file"  name="userpic" id="userpicButton" class="transparent" style="display: none; max-width: 180px;">
									</td>
								</tr>
								<tr>
									<td class="logintd">
										<center>
											<button id="edit" name="edit" value="Edit" class="button">Edit</button>
										</center>
										<center>
											<input type="submit" style="display: none;" id="save" type="submit" name="submit" value="Save" class="button">
										</center>

									</td>
								</form>
								<td class="logintd">
									<center>
										<a href="AWT_Home.php"><button type="submit" name="gotohome" class="button">Goto Home</button></a>
									</center>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p id="res"></p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</center>
		</div>
	</center>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#edit').on('click',function(e){
				e.preventDefault();
				$('#firstname').prop('readonly',false);
				$('#lastname').prop('readonly',false);
				$('#email').prop('readonly',false);
				$('#mobile').prop('readonly',false);
				$('#edit').hide();
				$('#userpicButton').show();
				$('#save').show();
			})
			$('#updateProfile').submit(function(e){
				e.preventDefault();
				var formData = new FormData(this);
				$('#res').html('');
				if(confirm("Are you sure you want to update???")){
					$.ajax({
						url:'ajax/updateProfile.php',
						type:'post',
						data: formData,
						contentType: false,
						processData: false,
						success: function(data){
							$('#res').append(data);
							setTimeout(function(){},2500);
							location.reload();
						}						
					})
				}
			})
		})
	</script>
</body>
</html>